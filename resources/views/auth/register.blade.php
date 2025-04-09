<x-guest-layout>
    <style>
        .form-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f8fafc; /* Couleur de fond */
            border: 1px solid #cbd5e0; /* Bordure */
            border-radius: 8px;
        }

        .form-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #2d3748; /* Couleur du texte */
        }

        .form-field {
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
            color: #4a5568; /* Couleur du texte */
            margin-bottom: 5px;
        }

        .form-input {
            width: 100%;
            padding: 10px;
            border: 1px solid #cbd5e0; /* Bordure */
            border-radius: 4px;
            background-color: #edf2f7; /* Couleur de fond de l'input */
        }

        .form-error {
            color: #e53e3e; /* Couleur du texte d'erreur */
            margin-top: 5px;
        }

        .form-link {
            font-size: 0.875rem;
            color: #4a5568; /* Couleur du texte du lien */
            text-decoration: underline;
            margin-right: 10px;
        }

        .form-button {
            padding: 10px 20px;
            background-color: #4299e1; /* Couleur de fond du bouton */
            color: #ffffff; /* Couleur du texte du bouton */
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-button:hover {
            background-color: #2b6cb0; /* Couleur de fond du bouton au survol */
        }
    </style>

    <div class="form-container">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-header">
                <h1 class="form-title">INSCRIPTION</h1>
            </div>

            <!-- Name -->
            <div class="form-field">
                <label class="form-label" for="name">Nom</label>
                <input id="name" class="form-input" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="form-error" />
            </div>

            <!-- Email Address -->
            <div class="form-field">
                <label class="form-label" for="email">Email</label>
                <input id="email" class="form-input" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="form-error" />
            </div>

            <!-- Password -->
            <div class="form-field">
                <label class="form-label" for="password">Mot de passe</label>
                <input id="password" class="form-input" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="form-error" />
            </div>

            <!-- Confirm Password -->
            <div class="form-field">
                <label class="form-label" for="password_confirmation">Confirmer le mot de passe</label>
                <input id="password_confirmation" class="form-input" type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="form-error" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="form-link" href="{{ route('login') }}">Vous êtes déjà inscrit ?</a>
                <button type="submit" class="form-button">S'inscrire</button>
            </div>
        </form>
    </div>
</x-guest-layout>
