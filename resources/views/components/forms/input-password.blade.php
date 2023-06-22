@props(['name' => 'password'])

<div class="input-join right" x-data="{ show: true }">
    <input :type="show ? 'password' : 'text'" type="password" name="{{ $name }}" {!! $attributes->merge(['class' => 'form-control border-r-0']) !!}
        value="{{ old($name) }}">
    <span class="cursor-pointer" @click="show = !show">
        <i :class="show ? 'fas fa-eye' : 'fas fa-eye-slash'" class="text-muted"></i>
    </span>
</div>
