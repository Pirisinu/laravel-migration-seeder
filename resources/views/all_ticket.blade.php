<main>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Azienda</th>
            <th scope="col">Stazione di partenza</th>
            <th scope="col">Stazione di arrivo</th>
            <th scope="col">Orario di partenza</th>
            <th scope="col">Orario di arrivo</th>
            <th scope="col">Codice Treno</th>
            <th scope="col">Numero Carrozze</th>
            <th scope="col">Nell'orario</th>
            <th scope="col">Cancellato</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                <tr>
                    <td>{{$train->agency}}</td>
                    <td>{{$train->departure_station}}</td>
                    <td>{{$train->arrival_station}}</td>
                    <td>{{$train->departure_time}}</td>
                    <td>{{$train->arrival_time}}</td>
                    <td>{{$train->train_code}}</td>
                    <td>{{$train->number_of_carriages}}</td>
                    <td>{{$train->in_the_timetable ? 'Si' : 'No'}}</td>
                    <td>{{$train->deleted ? 'Si' : 'No'}}</td>

                </tr>
            @endforeach
        </tbody>
      </table>

    @yield('single_ticket')
</main>
