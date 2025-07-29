<div class="accordion-item">
    <h2 class="accordion-header">
        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#checkbox-fields">
            Campo de entrada do tipo checkbox
        </button>
    </h2>
    <div id="checkbox-fields" class="accordion-collapse collapse" data-bs-parent="#inputs-fields">
        <div class="accordion-body">
            <div class="row">
                <div class="col-4">
                    <x-form.checkbox name="notifications0[]" :checked="old('notifications', ['email', 'push'])" :options="[
                        'push' => 'Push Notification',
                        'email' => 'Email',
                        'sms' => 'SMS',
                    ]" />
                </div>
                <div class="col-4">
                    <x-form.checkbox name="permissions[]" label="Permissões"
                        help-text="Selecione as permissões do usuário" :checked="old('permissions', $userPermissions ?? [])" :options="[
                            'view' => 'Visualizar',
                            'edit' => 'Editar',
                            'delete' => 'Excluir',
                            'manage' => 'Gerenciar',
                        ]" />
                </div>
                <div class="col-4">
                    <x-form.checkbox name="notifications[]" label="Notificações" switch :checked="old('notifications', ['email', 'push'])"
                        :options="[
                            'push' => 'Push Notification',
                            'email' => 'Email',
                            'sms' => 'SMS',
                        ]" />
                </div>
                <div class="col-auto mt-5">
                    <x-form.checkbox name="interests[]" label="Áreas de Interesse" required inline
                        help-text="Selecione suas áreas de interesse" :checked="old('interests', $userInterests ?? [])" :options="[
                            'technology' => 'Tecnologia',
                            'sports' => 'Esportes',
                            'travel' => 'Viagens',
                            'food' => 'Culinária',
                            'music' => 'Música',
                        ]" />
                </div>
            </div>
        </div>
    </div>
</div>
