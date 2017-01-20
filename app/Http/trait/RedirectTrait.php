<?php

namespace App\Http\Traits;   // Or the place where the trait is stored (step 2)

use Illuminate\Http\Request;

trait RedirectTrait
{
 /**
 * Where to redirect users after register/login/reset based in roles.
 *
 * @param \Iluminate\Http\Request  $request
 * @param mixed $user
 * @return mixed
 */
public function RedirectBasedInRole(Request $request, $user) {

  $route = '';

  switch ($user->admin) {
      # Admin
      case 1:
        $route = '/admin/dashboard/route';  // the admin's route
      break;

      # Employee
      case 0:
        $route = '/employee/dashboard/route'; // the employee's route
      break;
      default: break;
    }

    return redirect()->intended($route);
  }

}