@extends('layouts.app')

@section('title', $author->name )

@push('styles')

@endpush

@section('content')

    <div class="container">

        {{--Component to show the movie top navigation bar for Movie Display, Director and movie itself--}}
        <x-movie.show-movie-header>
            <a
                style="font-size: 17px;"
                class="show-links"
                href="/directors/">
                Movie Directors
            </a>
            <i class="fa-solid fa-chevron-right chevron"></i>
            <span
                style="font-size: 17px;"
                class="{{ url()->current() ? 'text-muted' : '' }}">
                {{ $author->name }}
            </span>
        </x-movie.show-movie-header>

        <div class="row">
            <div class="col-md-2">
                <div class="border-start border-top border-bottom border-end" style="padding: 4px">
                <img src="/images/banner.jpg" style="border-radius: 5px" width="100%" alt="Director's image">
                <div class="mt-2">
                    <span>Name: {{ $author->name }} </span>
                    <br>
                    <span>Age: {{ $author->age }}</span>
                    <div style="text-align: justify;padding-top: 3px">
                        <span><small> {{ $author->about }} </small></span>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-md-8">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore dolorem, dolores inventore iusto molestiae nisi recusandae reiciendis suscipit! Aliquam commodi consequatur cupiditate delectus doloribus eaque eius eos explicabo fugit id iusto magnam magni necessitatibus nisi non officia optio quas quasi quisquam, reiciendis, repellendus reprehenderit saepe sapiente soluta sunt tempore voluptatem voluptatum. Iure odio saepe voluptates! Ab aliquam animi asperiores ducimus error expedita facere ipsum itaque iusto labore laborum maxime minus neque nihil nostrum placeat, provident quibusdam quo quos vero? Accusantium cumque deleniti illo iste porro possimus quaerat rem soluta, sunt tenetur veritatis vitae voluptate voluptatum! Consequatur debitis dignissimos dolores dolorum eaque earum ex expedita hic inventore labore mollitia nam necessitatibus pariatur possimus provident, repellat, repudiandae suscipit temporibus velit voluptatibus. Alias aspernatur cum, dolore ea et fuga hic iure laudantium maxime molestiae nesciunt praesentium ratione saepe? Ab accusantium architecto, consectetur distinctio enim ex fugit illum incidunt iste labore obcaecati officiis omnis qui rerum similique soluta vero voluptate? Amet, assumenda commodi corporis delectus dicta excepturi inventore, iure laudantium, nesciunt numquam optio soluta tempore. At consectetur cupiditate eius fugiat, libero maxime molestias nesciunt pariatur quis sapiente, ullam veniam. Culpa cupiditate, deleniti dolor earum, eligendi eos error expedita impedit inventore laboriosam minima nam perferendis sint sunt totam voluptatem voluptatibus voluptatum. Deleniti maiores rem sint. Ad aliquam corporis culpa dolor, eveniet ipsam minima perferendis. Ad aliquam aliquid architecto consequuntur dolor ea eligendi error, eum eveniet exercitationem, impedit labore minus modi natus officia perspiciatis quaerat repudiandae sapiente sequi, sit! A, aut cupiditate distinctio dolorum ex illum inventore ipsa ipsum iste libero minima nihil perferendis quaerat quidem soluta. Accusantium aliquam architecto autem deleniti deserunt dolorum ducimus, ea eaque eum ex expedita, incidunt iste iusto labore libero necessitatibus nesciunt nisi nostrum numquam officiis perferendis quae quod sed totam voluptas. A adipisci aperiam obcaecati odio porro. Beatae, debitis dicta dignissimos illum nam nobis rerum veritatis vero! Adipisci alias aut delectus deleniti dolor dolore doloremque dolorum eius excepturi explicabo fuga fugiat fugit harum illum inventore itaque libero molestias nemo nisi numquam perferendis placeat porro possimus provident quis quisquam recusandae reiciendis sapiente similique tempora temporibus ut vero, voluptatum. Aperiam commodi consequatur delectus ducimus expedita officiis quae quas reiciendis vero? Accusamus aliquid ea error esse exercitationem fugit rerum tempore voluptatem? Accusantium adipisci blanditiis cum cupiditate distinctio dolore eius iure, magni nobis quibusdam quis, sapiente! Accusantium assumenda at beatae cum delectus dignissimos dolore error est expedita id in ipsa ipsam iusto minus molestiae molestias necessitatibus nisi pariatur perspiciatis praesentium, quam quasi quisquam sunt veniam voluptatibus. Aut consequatur ipsam iste itaque magni maiores quaerat quia, quis quod? Consequatur deleniti dolor ducimus ea earum itaque iure minus molestias nam, perferendis quasi quos, sunt temporibus ullam vel. Ad, amet exercitationem expedita explicabo facere fugit id illo ipsa ipsam natus nulla quas quos. Harum illo inventore ipsum, necessitatibus optio quam saepe suscipit. Accusantium laboriosam quam quod, ratione sequi tenetur! Accusamus ad alias atque autem beatae corporis cum cumque cupiditate doloremque ea et, eum ex illum impedit iste, iure iusto laboriosam libero minima minus modi nam nesciunt nihil nobis nostrum obcaecati pariatur quaerat quas quo reprehenderit rerum saepe similique suscipit ut vel veritatis voluptatibus. Et exercitationem fugit harum illo, laudantium praesentium vitae. Accusantium aut consequuntur, culpa distinctio doloribus eaque incidunt itaque nisi odit omnis perspiciatis soluta voluptatum? Animi aut culpa debitis eaque earum eveniet ipsam magni minima odit officiis praesentium quia repellat repellendus similique sunt, tempore vero voluptates voluptatibus. Accusantium adipisci amet commodi doloremque ducimus excepturi fuga, fugiat illum impedit perferendis quo repudiandae tempore voluptas. Autem dolor harum iure maiores odit. Accusantium ad at autem deserunt eius eveniet excepturi fuga illo in ipsa itaque laborum laudantium molestiae mollitia, nam pariatur quae quaerat quasi reiciendis rem, saepe sunt tempora, totam veritatis voluptates. Delectus dolor error fugiat in possimus quaerat recusandae rem rerum velit voluptas! Aperiam beatae commodi consequuntur cum, dicta eaque enim itaque magnam perspiciatis quae ratione reprehenderit sunt voluptatibus. Animi aspernatur consequuntur culpa dolorum eum fuga id impedit inventore maiores, minus molestias nesciunt perspiciatis provident, quos recusandae repudiandae unde. Facilis, quia quisquam. A autem beatae enim eos et facilis in inventore nisi repudiandae suscipit? Ad architecto, commodi, corporis culpa dicta distinctio dolore eius eligendi error eum illo iste minus necessitatibus nobis optio possimus quam quasi quia quos repellat reprehenderit rerum sunt tempore tenetur ut velit vitae voluptatibus? Accusantium amet corporis earum enim eveniet fugiat ipsam, nulla odit possimus quae quasi quia quibusdam quod reiciendis ullam, veniam voluptatum. Asperiores culpa dignissimos eius et iure labore nisi optio porro possimus qui quibusdam rem suscipit totam, unde veniam voluptatibus voluptatum. Aut, culpa doloribus facere illum laborum maxime natus perferendis quam quidem repellat sed, tempore ullam vel. Blanditiis cumque, facilis iure minus officia totam? Accusamus amet architecto atque blanditiis culpa cumque cupiditate debitis dolore dolores ducimus ex ipsam iusto obcaecati officia, possimus praesentium quibusdam quis reiciendis tempora, ullam velit veniam voluptatibus? Architecto, cum, dolorum ducimus eveniet excepturi impedit nulla perferendis quia quod sequi suscipit tempora veritatis, voluptatum? Amet blanditiis, cupiditate deserunt doloremque dolorum esse necessitatibus! Est eveniet exercitationem iste itaque iusto neque numquam odio quos sit veritatis. Assumenda dolorem impedit nemo nobis placeat sint. Aliquid eaque error itaque sint totam! Eius error facilis id illo libero placeat possimus quae quas quia repudiandae tempore, ullam? Deleniti dolores earum eius est expedita facilis inventore laudantium nemo nobis odit quasi quidem quisquam sed sequi, temporibus. Commodi consectetur deleniti eum voluptatem? Adipisci atque blanditiis cumque, dolor eaque ipsa iste minus numquam perferendis provident reiciendis rem tempora velit. Aliquid amet distinctio dolor doloribus ducimus earum eos error iure magnam natus officiis omnis porro provident ratione repudiandae unde, voluptas. A ad aliquam aliquid, animi aspernatur atque autem consequatur culpa cum dolore eius, eligendi enim eos ex, inventore ipsa iure laudantium nam odit officiis qui quidem quisquam quo saepe sed sunt totam vel velit voluptatibus voluptatum. Adipisci architecto atque, deserunt dicta ducimus facilis minus provident repellat sed voluptatum! Dolores eius eligendi est facilis ipsam maiores omnis qui quibusdam quisquam quo, recusandae sunt temporibus vel vitae, voluptatum! Deleniti, doloribus ducimus. Dolor esse ex fugiat mollitia neque optio provident quod velit.
            </div>
        </div>

    </div>

@endsection
