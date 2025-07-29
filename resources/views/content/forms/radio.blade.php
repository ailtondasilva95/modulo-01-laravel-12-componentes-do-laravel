<div class="accordion-item">
    <h2 class="accordion-header">
        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#radio-fields">
            Campo de entrada do tipo radio
        </button>
    </h2>
    <div id="radio-fields" class="accordion-collapse collapse" data-bs-parent="#inputs-fields">
        <div class="accordion-body">
            <div class="row mb-3">
                <div class="col">
                    <x-form.radio name="radio" label="Radio" :options="[
                        'radio1' => 'Radio C1',
                        'radio2' => 'Radio C2',
                        'radio3' => 'Radio C3',
                        'radio4' => 'Radio C4',
                        'radio5' => 'Radio C5',
                    ]" />
                </div>
                <div class="col">
                    <x-form.radio name="radio-required" label="Com obrigatóriedade" required :options="[
                        'radio1' => 'Radio C1',
                        'radio2' => 'Radio C2',
                        'radio3' => 'Radio C3',
                        'radio4' => 'Radio C4',
                        'radio5' => 'Radio C5',
                    ]" />
                </div>
                <div class="col">
                    <x-form.radio name="radio-checked" label="Com checked" required checked-value="radio3"
                        :options="[
                            'radio1' => 'Radio C1',
                            'radio2' => 'Radio C2',
                            'radio3' => 'Radio C3',
                            'radio4' => 'Radio C4',
                            'radio5' => 'Radio C5',
                        ]" />
                </div>
                <div class="col">
                    <x-form.radio name="radio-checked-old-1" label="Com checked-old 1" required
                        checked-value="{{ old('radio-checked-old-1', $user->gender ?? 'radio3') }}" :options="[
                            'radio1' => 'Radio C1',
                            'radio2' => 'Radio C2',
                            'radio3' => 'Radio C3',
                            'radio4' => 'Radio C4',
                            'radio5' => 'Radio C5',
                        ]" />
                </div>
                <div class="col">
                    <x-form.radio name="radio-checked-old-2" label="Com checked-old 2" required :checked-value="old('radio-checked-old-2', $user->gender ?? 'radio1')"
                        :options="[
                            'radio1' => 'Radio C1',
                            'radio2' => 'Radio C2',
                            'radio3' => 'Radio C3',
                            'radio4' => 'Radio C4',
                            'radio5' => 'Radio C5',
                        ]" />
                </div>
            </div>

            <div class="mb-3">
                <x-form.radio name="radioL" label="Radio em Linha" required inline checked-value="radio3"
                    :options="[
                        'radio1' => 'Radio L1',
                        'radio2' => 'Radio L2',
                        'radio3' => 'Radio L3',
                        'radio4' => 'Radio L4',
                        'radio5' => 'Radio L5',
                    ]" />
            </div>

            <div class="mb-3">
                <x-form.radio name="radioLInfo" label="Radio em Linha Info" required inline
                    help-text="Selecione um radio" :options="[
                        'radio1' => 'Radio L1',
                        'radio2' => 'Radio L2',
                        'radio3' => 'Radio L3',
                        'radio4' => 'Radio L4',
                        'radio5' => 'Radio L5',
                    ]" />
            </div>

            <div class="mb-3">
                <x-form.radio name="radioNoLabel" :options="[
                    'NoLabel1' => 'No Label',
                    'NoLabel2' => 'No Label',
                    'NoLabel3' => 'No Label',
                    'NoLabel4' => 'No Label',
                    'NoLabel5' => 'No Label',
                ]" />
            </div>

        </div>
    </div>
</div>
