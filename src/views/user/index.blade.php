<x-app-layout>
<div>
    <div class="flex justify-between mb-10 border-b border-gray-800 py-2">
        <div class="flex">
            <x-button class="mr-5">Neuen Kunden manuell anlegen</x-button>
            <x-button class="mr-3">
                <i class="fa-solid fa-upload"></i>
            </x-button>
            <x-button>
                <i class="fa-solid fa-download"></i>
            </x-button>
        </div>

        
    </div>
    <x-table>
        <x-slot name="heading">
            <x-table.heading>
                Firma
            </x-table.heading>
            <x-table.heading>
                Name
            </x-table.heading>
            <x-table.heading>
                Email
            </x-table.heading>
            <x-table.heading></x-table.heading>
        </x-slot>
        @forelse($users as $user)
            <x-table.row class="hover:bg-gray-100" onmouseover="showIcon(this)" onmouseout="hideIcon(this)">
                <x-table.cell>
                    {{ $user->billingaddress->company_name }}
                </x-table.cell>
                <x-table.cell>
                    {{ $user->billingaddress->billing_name }}
                </x-table.cell>
                <x-table.cell>
                    {{ $user->email }}
                </x-table.cell>
                <x-table.cell class="w-48">
                    <div style="display: none" class="flex works flex-end text-lg">
                        <a href="{{ route('users.show', $user->id) }}" class="mr-3 cursor-pointer">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="{{ route('users.edit', $user->id) }}" class="mr-3 cursor-pointer">
                            <i class="fa-solid fa-pen"></i>
                        </a class="cursor-pointer">
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">
                                <i class="fa-solid fa-trash text-red-600"></i>
                            </button>
                        </form>
                    </div>
                </x-table.cell>
            </x-table.row>
        @empty
            <p class="text-xl">No Companies</p>
        @endforelse
    </x-table>
    {{ $users->links() }}
</div>
<script>
    function showIcon(row) {
        let icon = row.querySelector('.works');
        if (icon) {
            icon.style.display = 'flex'; // Zeige das Icon an
        }
    }

    function hideIcon(row) {
        let icon = row.querySelector('.works');
        if (icon) {
            icon.style.display = 'none'; // Verstecke das Icon
        }
    }
</script>
</x-app-layout>