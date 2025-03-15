<div class="min-h-screen flex items-center justify-center bg-red-100">
    <div class="bg-white p-8 rounded-lg shadow-md text-center max-w-lg">
        <svg class="w-16 h-16 text-red-500 mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
        <h2 class="text-2xl font-bold text-red-600">Payment Failed</h2>
        <p class="text-gray-600 mt-2">Something went wrong with your donation. Please try again.</p>
        <a href="{{ route('donation') }}" class="mt-4 inline-block bg-red-600 text-white px-6 py-2 rounded-lg shadow-md hover:bg-red-700">Try Again</a>
    </div>
</div>
