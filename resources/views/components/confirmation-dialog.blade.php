<style>
  [x-cloak] {
    display: none;
  }
</style>

<div x-data="{ open: false }">
  <!-- Trigger Button -->
  <button @click="open = true" class="text-red-500">
    <i class="fa-solid fa-trash"></i> Delete
  </button>

  <!-- Confirmation Modal -->
  <div x-show="open" x-cloak
    class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-75">
    <div
      class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all max-w-lg w-full p-6">
      <h2 class="text-xl font-semibold mb-4">Are you sure?</h2>
      <p class="mb-6">Do you really want to delete this item? This process
        cannot be undone.</p>
      <div class="flex justify-end">
        <button @click="open = false"
          class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-2">
          Cancel
        </button>
        <form method="POST" action="{{ $action }}">
          @csrf
          @method('DELETE')
          <button type="submit"
            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
            Delete
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
