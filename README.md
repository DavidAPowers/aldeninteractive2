# hypersonata

### API Authentication: Passport ###

See https://laravel.com/docs/8.x/passport

Creating a user for local login with artisan tinker:

```
use Carbon\Carbon;
$user = new App\Models\User();
$user->password = Hash::make('Sg*b6><A');
$user->email = 'cyborgk@gmail.com';
$user->name = 'David Powers';
$user->save();
$user->email_verified_at = Carbon::now();
$user->save();

```