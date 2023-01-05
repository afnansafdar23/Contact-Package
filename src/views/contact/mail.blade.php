<x-mail::message>
    # Introduction

    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas consectetur, obcaecati deserunt provident eos
    sit eaque?
    {{ $name }}
    Message:
    {{ $message }}

    <x-mail::button :url="''">
        Button Text
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
