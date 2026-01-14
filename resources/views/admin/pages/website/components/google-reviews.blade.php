@extends('admin.layouts.base-admin')
@section('title', 'Google Reviews')
@section('content')
    <div class="px-6 my-6">
        <div class="card shadow">
            <!-- Nav -->
            <ul class="nav nav-line-bottom mb-3 border-b" id="pills-tab" role="tablist">
                <!-- Nav item -->
                <li class="nav-item" role="presentation">
                    <button class="p-3 px-6 border-b nav-link font-semibold active" id="pills-design-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-design" type="button" role="tab" aria-controls="pills-design"
                        aria-selected="true">
                        Design
                    </button>
                </li>
                <!-- Nav item -->
                <li class="nav-item" role="presentation">
                    <button class="p-3 px-6 font-semibold border-b border-transparent nav-link" id="pills-livewire-tab"
                        data-bs-toggle="pill" data-bs-target="#pills-livewire" type="button" role="tab"
                        aria-controls="pills-livewire" aria-selected="false">
                        Livewire Integration
                    </button>
                </li>
                <!-- Nav item -->
                <li class="nav-item" role="presentation">
                    <button class="p-3 px-6 font-semibold border-b border-transparent nav-link" id="pills-blade-tab"
                        data-bs-toggle="pill" data-bs-target="#pills-blade" type="button" role="tab"
                        aria-controls="pills-blade" aria-selected="false">
                        Blade Code
                    </button>
                </li>
            </ul>

            <!-- Tab content -->
            <div class="tab-content p-6" id="pills-tabContent">
                <!-- Onglet Design -->
                <div class="tab-pane fade show active" id="pills-design" role="tabpanel" aria-labelledby="pills-design-tab"
                    tabindex="0">
                    @livewire('admin.website.components.google-reviews-slider')
                </div>

                <!-- Onglet Livewire -->
                <div class="tab-pane fade" id="pills-livewire" role="tabpanel" aria-labelledby="pills-livewire-tab"
                    tabindex="0">
                    <div class="code relative">
                        <button onclick="copyToClipboard(this)" type="button"
                            class="absolute top-0 right-10 btn inline-block bg-indigo-600 text-white border-indigo-600 hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none">
                            <span>
                                <i class="fa-regular fa-copy me-1"></i>
                            </span>
                            <span>Copy to Clipboard</span>
                        </button>
                        @php
                            $text = '@livewire(\'website.components.google-reviews-slider\')';
                        @endphp

                        <input
                            class="ClipboardText border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none"
                            value="{{ $text }}"></input>
                    </div>
                </div>

                <!-- Onglet Blade -->
                <div class="tab-pane fade" id="pills-blade" role="tabpanel" aria-labelledby="pills-blade-tab"
                    tabindex="0">
                    <div class="code relative">
                        <button onclick="copyToClipboard(this)" type="button"
                            class="absolute top-0 right-10 btn inline-block bg-indigo-600 text-white border-indigo-600 hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none">
                            <span>
                                <i class="fa-regular fa-copy me-1"></i>
                            </span>
                            <span>Copy to Clipboard</span>
                        </button>
                        @php
                            $html = file_get_contents(
                                resource_path('views/livewire/admin/website/components/google-reviews-slider.blade.php'),
                            );
                        @endphp
                        <textarea rows="25"
                            class="ClipboardText border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none">{!! $html !!}
                        </textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
