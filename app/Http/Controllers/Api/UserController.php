<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Response;

class UserController extends Controller
{

    /**
     * @var User
     */
    private $user;

    /**
     * UserController constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }


    /**
     * @return array
     */
    public function read(): array
    {
        return [
            'data' => auth()->user()
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  UserRequest  $request
     * @return JsonResponse
     */
    public function store(UserRequest $request) :JsonResponse
    {
        $emailExists = $this->user->where('email', $request->get('email'))->count();
        if ($emailExists) {
            return response()->json(['E-mail já cadastrado']);
        }

        $data = $request->all();
        $data['password'] = password_hash($request->get('password'), PASSWORD_DEFAULT);

        $this->user->create($data);

        $token = auth()->attempt([
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ]);

        if (!$token) {
            $message = env('APP_DEBUG') ? 'Erro ao obter token do JWT' : 'Ocorreu um erro';
            return response()->json([$message]);
        }

        return response()->json([
            'data' => auth()->user(),
            'token' => $token
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
