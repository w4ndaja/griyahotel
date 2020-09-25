<button type="button" class="btn btn-success d-flex align-items-center" data-toggle="modal" data-target="#assignRole">
     <svg style="fill: currentColor; margin-right: 5px" width="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M92.1 32C76.6 32 64 44.6 64 60.1V452c0 15.5 12.6 28.1 28.1 28.1H432c8.8 0 16-7.2 16-16s-7.2-16-16-16H112.5c-8.2 0-15.4-6-16.4-14.1-1.1-9.7 6.5-18 15.9-18h208V32H92.1z"/><path d="M432 416c8.8 0 16-7.2 16-16V60.1c0-15.5-12.6-28.1-28.1-28.1H368v384h64z"/></svg>
    Give Roles to User
</button>

<!-- Modal -->
<div class="modal fade" id="assignRole" tabindex="-1" role="dialog" aria-labelledby="assignRoleLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="assignRoleLabel">Choose Users</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('users.permission.assign') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="user">User</label>
                        <input type="text" name="user" id="user" class="form-control">
                        @error('user')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="roles">Choose roles</label>
                        <select name="roles[]" multiple id="roles" class="select2" style="width: 100%!important">
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                        @error('roles')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Assign</button>
                </form>
            </div>
        </div>
    </div>
</div>
