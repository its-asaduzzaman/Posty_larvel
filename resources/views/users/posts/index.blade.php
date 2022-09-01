@extends('layouts.app')

@section('content')
    <div class=" flex justify-center ">
        <div class=" w-8/12">
            <div class=" p-6">
                <h1 class=" text-2xl font-medium mb-1">{{ $user->name }}</h1>
                <p>Posted {{ $posts->count() }} {{ Str::plural('post', $posts->count()) }} and received
                    {{ $user->receivedLikes->count() }} likes</p>
            </div>


            <div class=" bg-white p-6 rounded-lg">
                @if ($posts->count())
                    @foreach ($posts as $post)
                        <div class=" mb-4 bg-slate-100 p-5 rounded-lg">
                            <a href="{{ route('users.posts', $post->user) }}" class=" font-bold">{{ $post->user->name }}</a>
                            <span class=" text-gray-600 text-sm">{{ $post->created_at->diffForHumans() }}</span>

                            <p class=" mb-2 ">{{ $post->body }}</p>

                            @can('delete', $post)
                                <div>
                                    <form action="{{ route('posts.destroy', $post) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class=" text-blue-500">Delete</button>
                                    </form>
                                </div>
                            @endcan

                            <div class=" flex items-center">
                                @auth
                                    @if (!$post->likedBy(auth()->user()))
                                        <form action="{{ route('posts.likes', $post) }}" method="post" class=" mr-1">
                                            @csrf
                                            <button type="submit" class=" text-blue-500">Like</button>
                                        </form>
                                    @else
                                        <form action="{{ route('posts.likes', $post) }}" method="post" class=" mr-1">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class=" text-blue-500">Unlike</button>
                                        </form>
                                    @endif

                                @endauth
                                <span>{{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count()) }}</span>
                            </div>
                        </div>
            </div>
            @endforeach

            {{ $posts->links('pagination::semantic-ui') }}
        @else
            <p>There are no post</p>
            @endif
        </div>
    </div>
@endsection
