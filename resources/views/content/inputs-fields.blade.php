<div class="accordion mb-2" id="inputs-fields">
    {{-- Campo de entrada básica --}}
    @include('content.forms.input-basic')

    {{-- Campo de entrada de TextArea --}}
    @include('content.forms.textarea')

    {{-- Campo de entrada do tipo radio --}}
    @include('content.forms.radio')

    {{-- Campo de entrada do tipo checkbox --}}
    @include('content.forms.checkbox')

    {{-- Campo de entrada com máscara usando Alpine e o seu plugin (alpinejs/mask) --}}
    @include('content.forms.input-mask')

    {{-- Campo de entrada de data/hora com (Flatpickr) --}}
    @include('content.forms.flatpickr')

    {{-- Campo de entrada select com (Select2) --}}
    @include('content.forms.select2')

    {{-- Campo de entrada file para Upload com (Bootstrap-Fileinput) --}}
    @include('content.forms.file')
</div>
