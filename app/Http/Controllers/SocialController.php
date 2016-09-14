<?php

namespace App\Http\Controllers;

use FacebookAds\Api;
use FacebookAds\Object\AdAccount;
use Illuminate\Http\Request;

use App\Http\Requests;

class SocialController extends Controller
{
    public function marketing()
    {
        return view('marketing');
    }

    public function facebook(Request $request)
    {

        session_start();

        $fb = new Facebook([
            'app_id' => '1222613651103921',
            'app_secret' => '{your-app-secret}',
        ]);

        $helper = $fb->getRedirectLoginHelper();

        if (!isset($_SESSION['facebook_access_token'])) {
            $_SESSION['facebook_access_token'] = null;
        }

        if (!$_SESSION['facebook_access_token']) {
            $helper = $fb->getRedirectLoginHelper();
            try {
                $_SESSION['facebook_access_token'] = (string) $helper->getAccessToken();
            } catch(FacebookResponseException $e) {
                // When Graph returns an error
                echo 'Graph returned an error: ' . $e->getMessage();
                exit;
            } catch(FacebookSDKException $e) {
                // When validation fails or other local issues
                echo 'Facebook SDK returned an error: ' . $e->getMessage();
                exit;
            }
        }

        if ($_SESSION['facebook_access_token']) {
            echo "You are logged in!";
        } else {
            $permissions = ['ads_management'];
            $loginUrl = $helper->getLoginUrl('http://localhost:8888/marketing-api/', $permissions);
            echo '<a href="' . $loginUrl . '">Log in with Facebook</a>';
        }

    }

    public function create(Request $request){
        $account = new AdAccount();
        $account->name = $request->get('name');
        return($account->name);
    }
}
