<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Chat with ') . $user->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="message-container mb-6 max-h-96 overflow-y-auto">
                    @foreach($messages as $message)
                        <div class="mb-4 
                            {{ $message->sender_id == Auth::id() 
                                ? 'text-right' 
                                : 'text-left' }}">
                            <span class="inline-block p-2 rounded 
                                {{ $message->sender_id == Auth::id() 
                                    ? 'bg-blue-500 text-white' 
                                    : 'bg-gray-200' }}">
                                {{ $message->content }}
                            </span>
                        </div>
                    @endforeach
                </div>

                <form action="{{ route('messages.store') }}" method="POST" class="flex">
                    @csrf
                    <input type="hidden" name="receiver_id" value="{{ $user->id }}">
                    <input type="text" name="content" 
                           placeholder="Type your message..." 
                           class="flex-grow p-2 border rounded-l-lg" 
                           required>
                    <button type="submit" 
                            class="bg-blue-500 text-white p-2 rounded-r-lg">
                        Send
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>