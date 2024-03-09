<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Requests\ClientRequest;
use Illuminate\Http\JsonResponse;
use App\Utils\RequestResponse;

class ClientController extends Controller
{
    public function getClients(): JsonResponse {
        $clients = Client::all();

        if ($clients->isEmpty()) {
            return RequestResponse::response_200("The database is empty", []);
        }

        return RequestResponse::response_200(
            "The consultation has been successfully concluded",
            $clients
        );
    }

    private function getClientById(int $id): ?object {
        return Client::find($id);
    }

    public function showClientById(int $id): JsonResponse {
        $client = $this->getClientById($id);

        if (!$client) {
            return RequestResponse::response_404("The user does not exist");
        }

        return RequestResponse::response_200(
            "The user has been successfully",
            $client
        );
    }

    public function postClient(ClientRequest $request): JsonResponse {
        Client::create($request->all());
        return RequestResponse::response_201("The user was created correctly");
    }

    public function putClient(ClientRequest $request): JsonResponse {
        if(!$this->getClientById($request->id)){
            return RequestResponse::response_404("The user does not exist");
        }

        $client = Client::find($request->id);
        $client->name = $request->name;
        $client->dui = $request->dui;
        $client->email = $request->email;
        $client->save();

        return RequestResponse::response_201("The user was updated correctly");
    }

    public function deleteClient(int $id): JsonResponse {
        if(!$this->getClientById($id)){
            return RequestResponse::response_404("The user does not exist");
        }

        Client::find($id)->delete();
        return RequestResponse::response_201("The user was deleted correctly");
    }
}
