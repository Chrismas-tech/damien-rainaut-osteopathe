<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('admin.layouts.doctype-header')

<body>
    @livewire('admin.session-messages-form')
    <main>
        <div id="app-layout" class="overflow-x-hidden flex">
            @include('admin.layouts.aside')
            <div id="app-layout-content"
                class="min-h-screen w-full min-w-[100vw] md:min-w-0 ml-[15.625rem] [transition:margin_0.25s_ease-out]">
                @include('admin.layouts.navbar')
                @include('admin.layouts.breadcrumb')
                @yield('content')
                @include('admin.layouts.footer')
            </div>
        </div>
    </main>
    @include('admin.layouts.scripts')
    @livewireScripts
    <x-livewire-alert::scripts />
</body>

</html>
