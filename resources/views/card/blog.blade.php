<article class="max-w-xs">
    <a href="#">
        <img src="{{ asset('storage/' . $post->post_img) }}" class="mb-5 rounded-lg" alt="Image 1">
    </a>
    <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
        <a href="#"> {{$post->title}}</a>
    </h2>
<div class="flex">
    <span class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{$post->author}}</span>
    <span class="text-sm font-medium text-gray-700 dark:text-gray-400"> {{$post->date_pub}}</span>

</div>
    <p class="mb-4 text-gray-500 dark:text-gray-400"> {{Str::limit($post->contenu, 100, '...')}}</p>
    <a href="
    {{route('view',['slug'=> $post->getSlug(),'post' => $post->id])}}" class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
        View Details
    </a>
</article>