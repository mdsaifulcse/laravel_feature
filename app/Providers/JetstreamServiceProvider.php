<?php

namespace App\Providers;

use App\Actions\Jetstream\DeleteUser;
use Illuminate\Support\ServiceProvider;
use Laravel\Jetstream\Jetstream;
use Laravel\Fortify\Fortify;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Events\LoginHistoryEvent;

class JetstreamServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {


      Fortify::authenticateUsing(function (Request $request) {
            $user = User::where('email', $request->auth)
                            ->orWhere('username', $request->auth)
                            ->orWhere('phone', $request->auth)
                            ->first();

            if ($user &&
                Hash::check($request->password, $user->password)) {

                LoginHistoryEvent::dispatch($user); // dispatch / fire event -------
                //event(new LoginHistoryEvent($user));

                return $user;
            }
        });



    Fortify::loginView(function () {
            return view('auth.login');
        });

    // Fortify::registerView(function () {
    //         return view('components.test');
    //     });

        $this->configurePermissions();

        Jetstream::deleteUsersUsing(DeleteUser::class);
    }

    /**
     * Configure the permissions that are available within the application.
     *
     * @return void
     */
    protected function configurePermissions()
    {
        Jetstream::defaultApiTokenPermissions(['read','create']);

        Jetstream::permissions([
            'create',
            'read',
            'update',
            'delete',
        ]);
    }
}
