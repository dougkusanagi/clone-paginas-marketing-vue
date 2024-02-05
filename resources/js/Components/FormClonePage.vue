<script setup>
import { ref } from "vue";

const url = ref("https://my.copyblogger.com/");
</script>

<template>
    <form @click="clone">
        <label class="w-full form-control">
            <div class="flex items-center space-x-3">
                <input
                    type="text"
                    placeholder="Digite a url da página a ser clonada"
                    class="w-full input input-bordered"
                    v-model="url"
                />

                <button class="btn btn-info">Clonar</button>
            </div>

            <div class="label">
                <span class="label-text-alt"
                    >A url deve começar com http:// ou https://</span
                >
            </div>
        </label>
    </form>
</template>
