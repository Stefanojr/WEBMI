<form method="POST" action="{{ route('data.insertUser') }}">
    @csrf

    <div class="form-group">
        <label for="perner">Perner:</label>
        <input type="text" class="form-control" id="perner" name="perner" value="{{ old('perner') }}" required>
        @error('perner')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="nama_user">Nama User:</label>
        <input type="text" class="form-control" id="nama_user" name="nama_user" value="{{ old('nama_user') }}" required>
        @error('nama_user')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="email_user">Email User:</label>
        <input type="email" class="form-control" id="email_user" name="email_user" value="{{ old('email_user') }}" required>
        @error('email_user')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="role_user">Role User:</label>
        <select class="form-control" id="role_user" name="role_user" required>
            <option value="admin">Admin</option>
            <option value="user">User</option>
            <option value="manager">Manager</option>
        </select>
        @error('role_user')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="id_unit">Pilih unit:</label>
        <select class="form-control" id="id_unit" name="id_unit" required>
            @foreach ($units as $unit)
                <option value="{{ $unit->id_unit }}" {{ old('id_unit') == $unit->id_unit ? 'selected' : '' }}>
                    {{ $unit->nama_unit }}
                </option>
            @endforeach
        </select>
        @error('id_unit')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password" required>
        @error('password')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
