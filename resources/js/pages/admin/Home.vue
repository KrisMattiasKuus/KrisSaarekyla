<template>
  <div class="flex">
    <!-- Sidebar -->
    <aside class="w-48 bg-gray-100 p-4 h-screen flex flex-col justify-between">
        <div>
      <button
        @click="mode = 'view'"
        class="block w-full text-left mb-2 px-4 py-2 rounded hover:bg-gray-200"
        :class="mode === 'view' ? 'bg-gray-300 font-bold' : ''"
      >
        View Products
      </button>
      <button
        @click="startCreate"
        class="block w-full text-left px-4 py-2 rounded hover:bg-gray-200"
        :class="mode === 'create' ? 'bg-gray-300 font-bold' : ''"
      >
        Create Product
      </button>
    </div>
      <div>
    <button
      @click="logout"
      class="block w-full text-left px-4 py-2 rounded bg-red-100 hover:bg-red-200 text-red-700"
    >
      Logout
    </button>
  </div>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 p-6 max-w-4xl mx-auto">
      <h1 class="text-2xl font-bold mb-6 text-white">Product Admin</h1>

      <!-- Create Product Form -->
      <form
        v-if="mode === 'create'"
        @submit.prevent="submit"
        class="bg-white p-4 rounded shadow mb-6"
      >
        <div class="mb-4">
          <label class="block mb-1 font-semibold">Name</label>
          <input v-model="form.name" type="text" class="w-full border p-2 rounded" required />
        </div>

        <div class="mb-4">
          <label class="block mb-1 font-semibold">Description</label>
          <textarea v-model="form.description" class="w-full border p-2 rounded"></textarea>
        </div>

        <div class="mb-4">
          <label class="block mb-1 font-semibold">Material</label>
          <input v-model="form.material" type="text" class="w-full border p-2 rounded" />
        </div>

        <div class="mb-4">
          <label class="block mb-1 font-semibold">Price</label>
          <input v-model="form.price" type="number" step="0.01" class="w-full border p-2 rounded" />
        </div>

        <div class="mb-4">
          <label class="block mb-1 font-semibold">Pictures (URLs, comma separated)</label>
          <input v-model="form.pictures" type="text" class="w-full border p-2 rounded" />
        </div>

        <button
          type="submit"
          class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700"
        >
          Save
        </button>
      </form>

      <!-- Product List -->
      <div v-if="mode === 'view'" class="bg-white p-4 rounded shadow">
        <h2 class="text-xl font-bold mb-4">Existing Products</h2>
        <ul>
          <li
            v-for="product in products"
            :key="product.id"
            class="border-b py-2 flex justify-between items-center"
          >
            <div>
              <strong>{{ product.name }}</strong> - €{{ product.price }}<br />
              <small>{{ product.material }}</small>
            </div>
            <div class="space-x-2">
              <button @click="edit(product)" class="text-blue-600">Edit</button>
              <button @click="destroy(product.id)" class="text-red-600">Delete</button>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script setup>
import { useForm, router } from '@inertiajs/vue3'
import { ref } from 'vue'

const props = defineProps({
  products: Array,
})

const form = useForm({
  id: null,
  name: '',
  description: '',
  material: '',
  price: '',
  pictures: '',
})

const mode = ref('view')

const submit = () => {
  if (form.id) {
    form.put(route('admin.products.update', form.id), {
      onSuccess: () => {
        form.reset()
        mode.value = 'view'
      },
    })
  } else {
    form.post(route('admin.products.store'), {
      onSuccess: () => {
        form.reset()
        mode.value = 'view'
      },
    })
  }
}

const edit = (product) => {
  form.id = product.id
  form.name = product.name
  form.description = product.description
  form.material = product.material
  form.price = product.price
  form.pictures = product.pictures?.join(', ') || ''
  mode.value = 'create'
}

const destroy = (id) => {
  if (confirm('Are you sure?')) {
    router.delete(route('admin.products.destroy', {id: id}), {
      onSuccess: () => {
        if (form.id === id) {
          form.reset()
          mode.value = 'view'
        }
      },
    })
  }
}

const startCreate = () => {
  form.reset()
  form.id = null
  mode.value = 'create'
}

const logout = () => {
  router.post(route('logout'))
}
</script>
