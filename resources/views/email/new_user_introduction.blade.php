@component('mail::message')
# 新しいユーザーが追加されました！

{{ $toUser->name }}さんこんにちは！

@component('mail::panel')
    新しく{{ $newUser->name }}さんが参加しましたよ！
@endconponent

@conponent('mail::button', ['url' => route('tweet.index')])
    つぶやきを見に行く
@endcomponent

@endconponent