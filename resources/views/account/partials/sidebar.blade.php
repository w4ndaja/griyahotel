<div class="w-full sm:w-1/4 mb-4 sm:mb-0 sm:mr-3">
    <div class="border border-t-8 border-gray-300 py-2">
        <a class="block px-4 py-2 hover:text-gray-900 focus:text-gray-900 {{ Request::is('account/edit-your-profile') ? 'text-gray-900' : 'text-gray-600'  }}" href="/account/edit-your-profile">Edit Profile</a>
        <a class="block px-4 py-2 hover:text-gray-900 focus:text-gray-900 {{ Request::is('account/change-your-password') ? 'text-gray-900' : 'text-gray-600'  }}" href="/account/change-your-password">Change Password</a>
    </div>
</div>