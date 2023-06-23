<form {{ $attributes }} x-data="{ loading: false }" @submit="loading = !loading">
    {{ $slot }}
</form>
