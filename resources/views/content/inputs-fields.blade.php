<div class="accordion mb-2" id="inputs-fields">
    {{-- Campo de entrada básica --}}
    @include('content.forms.input-basic')

    {{-- Campo de entrada com máscara usando Alpine e o seu plugin (alpinejs/mask) --}}
    @include('content.forms.input-mask')

    {{-- Campo de entrada do tipo radio com (Icheck Bootstrap) --}}
    @include('content.forms.radio')

    {{-- Campo de entrada do tipo checkbox com (Icheck Bootstrap) --}}
    @include('content.forms.checkbox')

    {{-- Campo de entrada de TextArea --}}
    @include('content.forms.textarea')

    {{-- Campo de entrada de data/hora com (Flatpickr) --}}
    @include('content.forms.flatpickr')
</div>
