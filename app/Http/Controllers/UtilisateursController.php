<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\validator;
use App\Models\Utilisateur;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\Auth; 

class UtilisateursController extends Controller
{
    //
    public function register(Request $request){
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'email'=>'required|email|unique:utilisateurs',
            'password'=>'required|confirmed'
        ]);

       $utilisateur= new Utilisateur();
       $utilisateur->nom = $request->nom;
       $utilisateur->prenom = $request->prenom;
       $utilisateur->email= $request->email;
       $utilisateur->password=hash::make($request->password);
       $utilisateur->telephone= $request->telephone;

       $utilisateur->save();
        
       return response()->json([
        'statuts'=>1,
        'message'=>'Utilisateur creer avec succes'

       ]);

       }
    public function login (Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required|confirmed'
        ]);
    
    $utilisateur = Utilisateur::where('email','=', $request->email)->first();
        if($utilisateur){
            if(Hash::check($request->password, $utilisateur->password)){
                // creer un jeton Token
               $token = $utilisateur->createToken('auth_token')->plainTextToken;
                return response()->json([
                    'statuts'=> 1,
                    'message'=>"connexion réussie",
                    'acces_token'=>$token
                ]);

            }else{
                return response()->json([
                    'statuts'=> 0,
                    'message'=>"Mot de passe incorrect"
                ], 404);
            }

        }else{
            return response()->json([
                'statuts'=> 0,
                'message'=>"l'utilisateur n'existe pas/ introuvable"
            ], 404);
        }
    }
    public function logout(Request $request){
        
        Auth::user()->tokens()->delete();
        return response()->json([
            'statuts'=> 1,
            'message'=>"Deconnexion réussie",
        ]);
    }
    public function profile(Request $request){
      
            return response()->json([
                'statuts' => 1,
                'message' => "Utilisateur authentifié",
                'datas' => Auth::user()
            ]);
        }
    
    }