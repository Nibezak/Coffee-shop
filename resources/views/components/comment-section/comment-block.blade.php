@props(['comment'])
<div class="shadow-lg rounded-lg bg-white mx-auto m-8 p-4 notification-box flex">
        <div class="pr-2">
        <img src="https://i.pravatar.cc/110?u={{$comment->author->username}}" class="rounded-full border border-8 border-gray-200">
        </div>
        <div>
          <div class="text-sm pb-2 flex justify-between">
          <strong>{{$comment->author->username}}</strong>
          <p class="text-gray-400 font-md ">{{$comment->created_at->diffForHumans()}}</p>
          </div>
          <div class="text-sm text-gray-600 font-md tracking-tight ">
            <p>
            {{$comment->body}}
          </p>
          </div>
        </div>
      </div>
