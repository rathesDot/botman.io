<nav class="fixed w-full flex items-center justify-between flex-wrap bg-teal h-16 px-6 z-50">
  <div class="flex items-center flex-no-shrink text-white mr-2 w-4/5 md:w-auto md:flex-grow">
    <div class="flex items-center mr-4">
        <a href="/{{ config('botman.default_version') }}" class="inline-block align-middle">
            @svg('botman-head', ['class' => 'h-8 w-auto mr-2 -mt-1'])
        </a>
        <div class="hidden align-middle text-white text-2xl tracking-wide md:inline-block">
            BotMan
        </div>
    </div>
    @if(!isset($isPage) || isset($isPage) && !$isPage)
    <div class="flex items-center justify-center md:flex-grow">
        <input class="p-2 w-full max-w-md border border-grey" type="text" placeholder="" id="search-input">
    </div>
    @endif
  </div>
  <div class="flex md:hidden">
    <button class="js-toggle flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light">
        @svg('close', ['class' => 'js-toggle-close h-3 w-3 hidden'])
        @svg('open', ['class' => 'js-toggle-open h-3 w-3'])
    </button>
  </div>
  <div class="w-full block hidden md:flex md:justify-end md:w-auto md:items-center">
    <a class="btn btn-outline btn-icon text-white text-lg rounded-full hidden md:inline" href="https://github.com/botman/botman">
        @svg('github', ['class' => 'h-4 w-4 fill-none stroke-current'])
    </a>
    <a class="btn btn-outline btn-icon text-white text-lg rounded-full hidden md:inline" href="https://twitter.com/botman_io">
        @svg('twitter', ['class' => 'h-4 w-4 fill-none stroke-current'])
    </a>
    <a class="btn btn-sm btn-outline text-white border border-white hidden md:inline"
        href="https://buildachatbot.io/?utm_source=landing&utm_medium=navigation&utm_campaign=video_course"
        target="_blank"
    >
        Video Course
    </a>
    @if(isset($isPage) && $isPage)
    <a class="btn btn-sm text-white btn-rounded-hover border border-white rounded-full
        hover:bg-white hover:text-black mr-4"
        href="/{{ config('botman.default_version') }}">
        Documentation
    </a>
    @endif
    @if(isset($currentVersion))
    <div class="px-4 py-2 rounded-full border border-white text-white">
        <select class="js-version-switcher uppercase text-sm bg-transparent text-white appearance-none border-0">
            @foreach(config('botman.available_versions') as $version)
                <option {{ ($version == $currentVersion) ? 'selected' : ''  }} value="{{ $version }}" class="text-black">
                    {{ $version }}
                </option>
            @endforeach
        </select>
        <span>&#9662;</span>
    </div>
    @endif
  </div>
</nav>