
    <a class="btn btn-xs btn-primary" href="{{ route('users.show', $user->id) }}">
        {{ trans('global.view') }}
    </a>

    <a class="btn btn-xs btn-info" href="{{ route('users.edit', $user->id) }}">
        {{ trans('global.edit') }}
    </a>

    <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('{{ trans('Are you sure to want delete this user?') }}');" style="display: inline-block;padding-top: 10px;padding-left: 10px;">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
    </form>



    