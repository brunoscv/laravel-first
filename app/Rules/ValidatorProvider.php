<?php

namespace App\Rules;

use Illuminate\Support\ServiceProvider;

class ValidatorProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $me = $this;
        $this->app['validator']->resolver(function ($translator, $data, $rules, $messages, $attributes) use ($me) {
            $messages += $me->getMessages();
            return new Validator($translator, $data, $rules, $messages, $attributes);
        });
    }

    protected function getMessages()
    {
        return [
            'cnh' => 'Carteira Nacional de Habilitação inválida',
            'titulo_eleitor' => 'Título de Eleitor inválido',
            'cnpj' => 'CNPJ inválido',
            'cpf' => 'CPF inválido',
            'cpf_cnpj' => 'CPF ou CNPJ inválido',
            'formato_cnpj' => 'Formato inválido para CNPJ',
            'formato_cpf' => 'Formato inválido para CPF',
            'formato_cpf_cnpj' => 'Formato inválido para CPF ou CNPJ',
            'campaign_exists' => 'Já existe uma campanha nesse período',
            'discount_exists' => 'Já existe um desconto nesse período',
            'unique_user_type' => 'Já existe perfil para este usuário',
        ];
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
