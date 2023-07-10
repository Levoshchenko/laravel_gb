@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Новости</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('admin.news.create') }}" type="button" class="btn btn-sm btn-outline-secondary">Добавить новость</a>
            </div>

        </div>
    </div>

    <div class="table-responsive">
        @include('admin.message')
        <table class="table table-bordered">
            <tr>
                <th>#ID</th>
                <th>Категории</th>
                <th>Название</th>
                <th>Автор</th>
                <th>Статус</th>
                <th>Дата создания</th>
                <th>Действия</th>
            </tr>
            @foreach($newsList as $news)
                <tr>
                    <td>{{ $news->id }}</td>
                    <td>{{ $news->categories }}</td>
                    <td>{{ $news->title }}</td>
                    <td>{{ $news->author }}</td>
                    <td>{{ $news->status }}</td>
                    <td>{{ $news->description }}</td>
                    <td>{{ $news->created_at }}</td>
                    <td><a href="{{ route('admin.news.edit', ['news' => $news]) }}">Редактировать</a>&nbsp; <a class="delete" href="javascript:;" style="color:red" rel="{{$news->id}}>Удалить</a> </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
"@push('js')
                            <script type="text/javascript">
                                document.addEventListener('DOMContentLoaded', function () {
                                    let items = document.querySelectorAll(".delete")
                                    items.forEach(function (item, key) {
                                        item.addEventListener('click', function () {
                                            const id = this.getAttribute('rel');
                                            if(confirm(`Подтвердить удаление записи с #ID = ${id}`)) {
                                                send(`/admin/news/${id}`).then(() => {
                                                    location.reload();
                                                });
                                            } else {
                                                alert("Отменено");
                                            }
                                        })
                                    })
                                })
                                async function send(url) {
                                    let response = await fetch(url, {
                                        method: 'DELETE',
                                        headers: {
                                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                                        }
                                    });
                                    let result = await response.json();
                                    return result.ok;
                                }
                            </script>
    @endpush
