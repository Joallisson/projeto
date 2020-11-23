<?php

    namespace App;

    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class Admin extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'admin';

        protected $fillable = [
            'cpf', 'name', 'password',  'email'
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];

        public function pesquisar($pesquisar = null)
        {
            $resultado = $this->where( function ($query) use ($pesquisar){
                if ($pesquisar) {
                    $query->where('cpf', 'LIKE', "%$pesquisar%");
                }
            })->paginate(2);

            return $resultado;
        }


    }
