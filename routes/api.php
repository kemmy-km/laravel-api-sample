<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// http://127.0.0.1:8000/api/sample
Route::get('/sample', function () {
    return response()->json([
        'name' => '山田太郎', 'gender' => '男','mail' => 'yamada@test.com']
    );
});

// qiitaAPIと同等の値を返す
Route::get('/github-api', function () {
    return response()->json(
      [
        "login" => "keigom2020",
        "id" => 57694504,
        "node_id" =>"MDQ6VXNlcjU3Njk0NTA0",
        "avatar_url"=>"https://avatars.githubusercontent.com/u/57694504?v=4",
        "gravatar_id"=>"",
        "url"=>"https://api.github.com/users/keigom2020",
        "html_url"=>"https://github.com/keigom2020",
        "followers_url"=>"https://api.github.com/users/keigom2020/followers",
        "following_url"=>"https://api.github.com/users/keigom2020/following{/other_user}",
        "gists_url"=>"https://api.github.com/users/keigom2020/gists{/gist_id}",
        "starred_url"=>"https://api.github.com/users/keigom2020/starred{/owner}{/repo}",
        "subscriptions_url"=>"https://api.github.com/users/keigom2020/subscriptions",
        "organizations_url"=>"https://api.github.com/users/keigom2020/orgs",
        "repos_url"=>"https://api.github.com/users/keigom2020/repos",
        "events_url"=>"https://api.github.com/users/keigom2020/events{/privacy}",
        "received_events_url"=>"https://api.github.com/users/keigom2020/received_events",
        "type"=>"User",
        "site_admin"=>false,
        "name"=>"KM",
        "company"=>"WEB制作受託会社",
        "blog"=>"https://qlpt.site/top",
        "location"=>"Tokyo",
        "email"=>null,
        "hireable"=>null,
        "bio"=>"2019_12～駆け出しWEB制作会社のコーダーです。\r\n現在はLaravel, AWSをメインに学習しデプロイ済みのポートフォリオを日々改善しています。",
        "twitter_username"=>null,
        "public_repos"=>11,
        "public_gists"=>0,
        "followers"=>0,
        "following"=>7,
        "created_at"=>"2019-11-13T02:35:23Z",
        "updated_at"=>"2021-12-19T03:29:53Z"
      ]
    )
    ->header('Content-Type', 'text/plain')
    ->header('server', 'GitHub.com')
    ->header('vary', 'Accept, Accept-Encoding, Accept, X-Requested-With')
    ->header('etag', 'W/"a2128e9a2148201a71d45e4f190a63950c92b9c910010c213f09333da705bef4"')
    ->header('last-modified', 'Sun, 19 Dec 2021 03:29:53 GMT')
    ->header('x-github-media-type', 'github.v3; format=json')
    ->header('access-control-expose-headers', 'ETag, Link, Location, Retry-After, X-GitHub-OTP, X-RateLimit-Limit, X-RateLimit-Remaining, X-RateLimit-Used, X-RateLimit-Resource, X-RateLimit-Reset, X-OAuth-Scopes, X-Accepted-OAuth-Scopes, X-Poll-Interval, X-GitHub-Media-Type, X-GitHub-SSO, X-GitHub-Request-Id, Deprecation, Sunset')
    ->header('access-control-allow-origin', '*')
    ->header('strict-transport-security', 'max-age=31536000; includeSubdomains; preload')
    ->header('x-frame-options', 'deny')
    ->header('x-content-type-options', 'nosniff')
    ->header('x-xss-protection', '0')
    ->header('referrer-policy', 'origin-when-cross-origin, strict-origin-when-cross-origin')
    // ->header("content-security-policy', 'default-src 'none'")
    ->header('x-ratelimit-reset', '1645237686')
    ->header('x-ratelimit-resource', 'core')
    ->header('x-ratelimit-used', '15')
    ->header('accept-ranges', 'bytes')
    ->header('content-length', '1539')
    ->header('x-github-request-id', 'D0D8:432C:4BADC9:650F58:62104D25')
    ;
});


Route::get('/sample2', [
    SampleController::class, 'apiHello'
]);

Route::get('/ping', function (Request $request) {
    return response()->json(
        ['result' => 'pong'],
        Response::HTTP_OK
    );
});
