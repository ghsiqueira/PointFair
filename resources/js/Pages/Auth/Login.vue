<template>
    <div>
        <x-guest-layout>
        <x-authentication-card>
            <template v-slot:logo>
            <x-authentication-card-logo />
            </template>

            <x-validation-errors class="mb-4" />

            <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
            </div>

            <form @submit.prevent="submit">
            <div>
                <x-label for="email" :value="__('Email:')" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" v-model="form.email" required autofocus autocomplete="username" />
                <x-input-error class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <x-label for="password" :value="__('Senha:')" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" v-model="form.password" required autocomplete="current-password" />
                <x-input-error class="mt-2" :message="form.errors.password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                <x-checkbox id="remember_me" name="remember" v-model:checked="form.remember" />
                <span class="ml-2 text-sm text-gray-600">{{ __('Lembrar de mim') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a v-if="canResetPassword" :href="route('password.request')" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Esqueceu sua senha?') }}
                </a>

                <x-button class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                {{ __('Entrar') }}
                </x-button>
            </div>
            </form>
        </x-authentication-card>
        </x-guest-layout>
    </div>
</template>
  
<script>
    import { defineProps } from 'vue';
    import XGuestLayout from '@/components/XGuestLayout.vue';
    import XAuthenticationCard from '@/components/XAuthenticationCard.vue';
    import XAuthenticationCardLogo from '@/components/XAuthenticationCardLogo.vue';
    import XValidationErrors from '@/components/XValidationErrors.vue';
    import XLabel from '@/components/XLabel.vue';
    import XInput from '@/components/XInput.vue';
    import XCheckbox from '@/components/XCheckbox.vue';
    import XButton from '@/components/XButton.vue';

    export default {
    props: {
        canResetPassword: Boolean,
        status: String,
    },
    components: {
        XGuestLayout,
        XAuthenticationCard,
        XAuthenticationCardLogo,
        XValidationErrors,
        XLabel,
        XInput,
        XCheckbox,
        XButton,
    },
    data() {
        return {
            form: {
                email: '',
                password: '',
                remember: false,
                processing: false,
                errors: {},
            },
        };
    },
    methods: {
        submit() {
        this.form.processing = true;

        // Lógica para enviar o formulário

        this.form.processing = false;
        },
    },
    };
</script> 