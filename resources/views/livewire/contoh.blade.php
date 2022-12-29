
    <div x-data="global">

        <button x-on:click="open = !open">Toggle</button>
        <p x-text="open? 'buka': 'tutup'"></p>
        <p x-html="generateHtml"></p>

        <input type="text" x-model="name" placeholder="isikan namamu">
        <p>Nama saya adalah : <strong x-text="name"></strong> </p>

        <h1 x-bind:class="isShow ? 'green' : 'red'" x-text="isShow ? 'konten di Tampilkan': 'konten di Sembunyikan'"></h1>

        <button x-on:click="isShow = !isShow" x-text=" isShow ? 'Sembunyikan': 'Tampilkan'"></button>
        <p x-show="isShow" x-transition>Surpriseee!!</p>

        <br>

        <input placeholder="isikan password" x-bind:type="keliatanga ? 'text' : 'password'">
        <button  x-on:click="keliatanga = !keliatanga" x-text=" keliatanga ? 'Sembunyikan': 'Tampilkan'"></button>

        <h1>DAFTAR PENGGUNA</h1>

        <button @click="fetchListUser()">Fetch Data</button>
        <button @click="apa = []">kosongkan</button>

        <template x-if="isLoading">
            <p>sedang memuat....</p>
        </template>

        <template x-if="!isLoading">
            <template x-if="apa.length !=0">
                <ul>
                    <template x-for="(item, index) in apa">
                        <li x-text="`${index + 1 } . ${item.name}`"></li>
                    </template>
                </ul>
            </template>
         </template>


        <template x-if="apa.length == 0">
            <p>Data pengguna kosong</p>
        </template>


        <table x-cloak>
                <tr>
                    <th>Nomor</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Kategori</th>
                    <th>Usia</th>
                </tr>
                <template x-for="(hilih,index) in pengguna">
                    <tr>
                        <td x-text="index + 1"></td>
                        <td x-text="hilih.nama"></td>
                        <td x-text=" hilih.jenis_kelamin == 'l' ? 'Perempuan': 'Laki-laki'"></td>
                        <template x-if="hilih.usia<13">
                            <td x-text="'Anak-anak'"></td>
                        </template>
                        <template x-if="hilih.usia>=13 && hilih.usia<18">
                            <td x-text="'remaja'"></td>
                        </template>
                        <template x-if="hilih.usia>=18">
                            <td x-text="'Dewasa'"></td>
                        </template>

                        <td x-text="hilih.usia"></td>
                    </tr>
                </template>

        </table>


        <template x-if="!isShow">
            <div>HAII</div>
        </template>

        <!-- x-init -->
        <p x-text="message"></p>
        <div x-init="message = 'halo dii!'"></div>
        <div x-init="message = 'apa iya!'"></div>

        <!-- x-effect -->
        <div x-effect="console.log('The name is: ' + name)"></div>

        <!-- x-ref -->
        <input type="text" x-ref="content">

        <button x-on:click="console.log(navigator.clipboard.writeText($refs.content.value))">
        Copy
        </button>

        <div x-data="{ label: 'From Alpine' }">
            <p x-ignore x-text="label">Hehe</p>
            <p x-ignore>Halo</p>
            <!-- datanya kepanggil. alpinenya berfungsi -->
            <p x-text="label">Hehe</p>

        </div>

        <!-- yang paling sering dipake ref sama  -->

        </button>

        <div x-data>
            <p x-text="$store.global.dataBaru"></p>
        </div>


        <div x-data="data">
            <h1>Is Dark Mode</h1>
            <p x-text="$store.darkMode.on"></p>
            <button @click="$store.darkMode.toggle()">Mode Gelap</button>
        </div>

    </div>

