@extends('layouts.app')

@section('content')

<div class="container">
    <div class="container">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">ラーメン次郎歌舞伎町店</h5>
                <form method="POST" action="{{ route('store.update', ['store' => $store]) }}">
                    @csrf
                    @method('PUT')
                    <fieldset class="mb-4">
                        <div class="form-group">
                            <label for="wait_people">
                                待ち人数
                            </label>
                            <select class="form-control" id="wait_people">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                                <option>16</option>
                                <option>17</option>
                                <option>18</option>
                                <option>19</option>
                                <option>20~25</option>
                                <option>26~30</option>
                                <option>31以上</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <input
                            name="id"
                            type="hidden"
                            value="{{ $store->id }}"
                            >
                        </div>
                        <div class="form-group">
                            <input
                            name="id"
                            type="hidden"
                            value="{{ $store->store_name }}"
                            >
                        </div>
                        <div class="form-group">
                            <input
                            name="id"
                            type="hidden"
                            value="{{ $store->store_name }}"
                            >
                        </div>

                        <div class="mt-5">
                            <a class="btn btn-secondary" href="/">
                                キャンセル
                            </a>
                            <button type="submit" class="btn btn-primary">
                                更新する
                            </button>
                        </div>
                    </fieldset>
                </form>                
            </div>
        </div>
    </div>
</div>

@endsection