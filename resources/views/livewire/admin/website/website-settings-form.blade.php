<div class="mb-6 grid grid-cols-1 gap-x-6 gap-y-8">
    <div class="card shadow">
        <div class="card-body">
            <div class="mb-10">
                <form wire:submit.prevent="submit">
                    @csrf

                    <div class="flex items-center my-3">
                        <i class="fas fa-cog fa-2x text-indigo-600 w-8 h-8 mr-2"></i>
                        <h4>Website Settings</h4>
                    </div>

                    <div class="mb-5">
                        @if (!$websiteSettings->maintenance)
                            <div class="bg-teal-500 text-white rounded-lg p-4" role="alert">
                                <span class="flex items-center font-bold">
                                    <img class="me-2" src="{{ asset('img/admin//svg/check-circle.svg') }}"
                                        alt="">
                                    Your Website is Live !
                                </span>
                            </div>
                        @else
                            <div class="bg-red-500 mb-3 text-white rounded-lg p-4" role="alert">
                                <span class="flex items-center font-bold">
                                    <img class="me-2" src="{{ asset('img/admin//svg/alert-triangle-white.svg') }}"
                                        alt="">
                                    Your Website is under maintenance
                                </span>
                            </div>
                        @endif
                    </div>

                    <div class="mb-4">
                        <div class="flex items-center">
                            <i class="fas fa-tv text-indigo-600 me-1"></i>
                            <label class="cursor-pointer" for="maintenance">Put the website in Live/Maintenance
                                mode</label>
                        </div>
                        <select wire:model="maintenance"
                            class="cursor-pointer py-2 px-4 block w-full rounded border-2 {{ $maintenance ? 'border-red-500' : 'border-green-500' }} focus:ring-0">
                            <option value="1">Maintenance Mode</option>
                            <option value="0">Go Live</option>
                        </select>
                        @error('maintenance')
                            <span
                                class="bg-red-200 px-2 py-1 text-red-700 text-sm font-medium rounded-md inline-block mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <div class="flex items-center">
                            <i class="fas fa-shield-alt text-black me-1"></i>
                            <label for="applicationName">Application Name</label>
                        </div>
                        <input wire:model.live="applicationName" type="text"
                            class="px-4 text-lg block w-full border-gray-500 rounded focus:border-indigo-600 focus:ring-indigo-600" />
                        @error('applicationName')
                            <span
                                class="bg-red-200 px-2 py-1 text-red-700 text-sm font-medium rounded-md inline-block mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <div class="flex items-center">
                            <i class="fas fa-envelope text-orange-600 me-1"></i>
                            <label for="emailWebsite">Email Website</label>
                        </div>
                        <input wire:model.live="emailWebsite" type="email"
                            class="px-4 text-lg block w-full border-gray-500 rounded focus:border-indigo-600 focus:ring-indigo-600" />
                        @error('emailWebsite')
                            <span
                                class="bg-red-200 px-2 py-1 text-red-700 text-sm font-medium rounded-md inline-block mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <div class="flex items-center">
                            <i class="fa-solid fa-location-crosshairs  text-fuchsia-600 me-1"></i>
                            <label for="addressService">Address of Service</label>
                        </div>
                        <input wire:model.live="addressService" type="text"
                            class="px-4 text-lg block w-full border-gray-500 rounded focus:border-indigo-600 focus:ring-indigo-600" />
                        @error('addressService')
                            <span
                                class="bg-red-200 px-2 py-1 text-red-700 text-sm font-medium rounded-md inline-block mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <div class="flex items-center">
                            <i class="fas fa-phone text-purple-600 me-1"></i>
                            <label for="phoneWebsite">Phone Website</label>
                        </div>
                        <div class="flex w-full">
                            <div class="w-5/12">
                                <select wire:model.live="countryCodePhoneWebsite"
                                    class="w-full border-gray-500 rounded focus:border-green-600 focus:ring-green-600"
                                    id="countryCode">
                                    <option value="+1">United States (+1)</option>
                                    <option value="+7">Russia (+7)</option>
                                    <option value="+20">Egypt (+20)</option>
                                    <option value="+27">South Africa (+27)</option>
                                    <option value="+30">Greece (+30)</option>
                                    <option value="+31">Netherlands (+31)</option>
                                    <option value="+32">Belgium (+32)</option>
                                    <option value="+33">France (+33)</option>
                                    <option value="+34">Spain (+34)</option>
                                    <option value="+36">Hungary (+36)</option>
                                    <option value="+39">Italy (+39)</option>
                                    <option value="+40">Romania (+40)</option>
                                    <option value="+41">Switzerland (+41)</option>
                                    <option value="+43">Austria (+43)</option>
                                    <option value="+44">United Kingdom (+44)</option>
                                    <option value="+45">Denmark (+45)</option>
                                    <option value="+46">Sweden (+46)</option>
                                    <option value="+47">Norway (+47)</option>
                                    <option value="+48">Poland (+48)</option>
                                    <option value="+49">Germany (+49)</option>
                                    <option value="+51">Peru (+51)</option>
                                    <option value="+52">Mexico (+52)</option>
                                    <option value="+53">Cuba (+53)</option>
                                    <option value="+54">Argentina (+54)</option>
                                    <option value="+55">Brazil (+55)</option>
                                    <option value="+56">Chile (+56)</option>
                                    <option value="+57">Colombia (+57)</option>
                                    <option value="+58">Venezuela (+58)</option>
                                    <option value="+60">Malaysia (+60)</option>
                                    <option value="+61">Australia (+61)</option>
                                    <option value="+62">Indonesia (+62)</option>
                                    <option value="+63">Philippines (+63)</option>
                                    <option value="+64">New Zealand (+64)</option>
                                    <option value="+65">Singapore (+65)</option>
                                    <option value="+66">Thailand (+66)</option>
                                    <option value="+81">Japan (+81)</option>
                                    <option value="+82">South Korea (+82)</option>
                                    <option value="+84">Vietnam (+84)</option>
                                    <option value="+86">China (+86)</option>
                                    <option value="+90">Turkey (+90)</option>
                                    <option value="+91">India (+91)</option>
                                    <option value="+92">Pakistan (+92)</option>
                                    <option value="+93">Afghanistan (+93)</option>
                                    <option value="+94">Sri Lanka (+94)</option>
                                    <option value="+95">Myanmar (+95)</option>
                                    <option value="+98">Iran (+98)</option>
                                    <option value="+211">South Sudan (+211)</option>
                                    <option value="+212">Morocco (+212)</option>
                                    <option value="+213">Algeria (+213)</option>
                                    <option value="+216">Tunisia (+216)</option>
                                    <option value="+218">Libya (+218)</option>
                                    <option value="+220">Gambia (+220)</option>
                                    <option value="+221">Senegal (+221)</option>
                                    <option value="+222">Mauritania (+222)</option>
                                    <option value="+223">Mali (+223)</option>
                                    <option value="+224">Guinea (+224)</option>
                                    <option value="+225">Ivory Coast (+225)</option>
                                    <option value="+226">Burkina Faso (+226)</option>
                                    <option value="+227">Niger (+227)</option>
                                    <option value="+228">Togo (+228)</option>
                                    <option value="+229">Benin (+229)</option>
                                    <option value="+230">Mauritius (+230)</option>
                                    <option value="+231">Liberia (+231)</option>
                                    <option value="+232">Sierra Leone (+232)</option>
                                    <option value="+233">Ghana (+233)</option>
                                    <option value="+234">Nigeria (+234)</option>
                                    <option value="+235">Chad (+235)</option>
                                    <option value="+236">Central African Republic (+236)</option>
                                    <option value="+237">Cameroon (+237)</option>
                                    <option value="+238">Cape Verde (+238)</option>
                                    <option value="+239">São Tomé and Príncipe (+239)</option>
                                    <option value="+240">Equatorial Guinea (+240)</option>
                                    <option value="+241">Gabon (+241)</option>
                                    <option value="+242">Republic of the Congo (+242)</option>
                                    <option value="+243">Democratic Republic of the Congo (+243)</option>
                                    <option value="+244">Angola (+244)</option>
                                    <option value="+245">Guinea-Bissau (+245)</option>
                                    <option value="+246">British Indian Ocean Territory (+246)</option>
                                    <option value="+248">Seychelles (+248)</option>
                                    <option value="+249">Sudan (+249)</option>
                                    <option value="+250">Rwanda (+250)</option>
                                    <option value="+251">Ethiopia (+251)</option>
                                    <option value="+252">Somalia (+252)</option>
                                    <option value="+253">Djibouti (+253)</option>
                                    <option value="+254">Kenya (+254)</option>
                                    <option value="+255">Tanzania (+255)</option>
                                    <option value="+256">Uganda (+256)</option>
                                    <option value="+257">Burundi (+257)</option>
                                    <option value="+258">Mozambique (+258)</option>
                                    <option value="+260">Zambia (+260)</option>
                                    <option value="+261">Madagascar (+261)</option>
                                    <option value="+262">Réunion (+262)</option>
                                    <option value="+263">Zimbabwe (+263)</option>
                                    <option value="+264">Namibia (+264)</option>
                                    <option value="+265">Malawi (+265)</option>
                                    <option value="+266">Lesotho (+266)</option>
                                    <option value="+267">Botswana (+267)</option>
                                    <option value="+268">Eswatini (+268)</option>
                                    <option value="+269">Comoros (+269)</option>
                                    <option value="+290">Saint Helena (+290)</option>
                                    <option value="+291">Eritrea (+291)</option>
                                    <option value="+297">Aruba (+297)</option>
                                    <option value="+298">Faroe Islands (+298)</option>
                                    <option value="+299">Greenland (+299)</option>
                                </select>
                            </div>
                            <div class="w-7/12">
                                <input wire:model.live="phoneWebsite" type="text"
                                    class="px-4 text-lg block w-full border-gray-500 rounded focus:border-indigo-600 focus:ring-indigo-600" />
                            </div>
                        </div>
                        @error('phoneWebsite')
                            <span
                                class="bg-red-200 px-2 py-1 text-red-700 text-sm font-medium rounded-md inline-block mt-1">{{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <div class="flex items-center">
                            <i class="fa-brands fa-whatsapp text-green-500 me-1"></i>
                            <label for="WhatsApp">WhatsApp</label>
                        </div>
                        <div class="flex w-full">
                            <div class="w-5/12">
                                <select wire:model.live="countryCodeWhatsAppPhone"
                                    class="w-full border-gray-500 rounded focus:border-indigo-600 focus:ring-indigo-600"
                                    id="countryCode">
                                    <option value="+1">United States (+1)</option>
                                    <option value="+7">Russia (+7)</option>
                                    <option value="+20">Egypt (+20)</option>
                                    <option value="+27">South Africa (+27)</option>
                                    <option value="+30">Greece (+30)</option>
                                    <option value="+31">Netherlands (+31)</option>
                                    <option value="+32">Belgium (+32)</option>
                                    <option value="+33">France (+33)</option>
                                    <option value="+34">Spain (+34)</option>
                                    <option value="+36">Hungary (+36)</option>
                                    <option value="+39">Italy (+39)</option>
                                    <option value="+40">Romania (+40)</option>
                                    <option value="+41">Switzerland (+41)</option>
                                    <option value="+43">Austria (+43)</option>
                                    <option value="+44">United Kingdom (+44)</option>
                                    <option value="+45">Denmark (+45)</option>
                                    <option value="+46">Sweden (+46)</option>
                                    <option value="+47">Norway (+47)</option>
                                    <option value="+48">Poland (+48)</option>
                                    <option value="+49">Germany (+49)</option>
                                    <option value="+51">Peru (+51)</option>
                                    <option value="+52">Mexico (+52)</option>
                                    <option value="+53">Cuba (+53)</option>
                                    <option value="+54">Argentina (+54)</option>
                                    <option value="+55">Brazil (+55)</option>
                                    <option value="+56">Chile (+56)</option>
                                    <option value="+57">Colombia (+57)</option>
                                    <option value="+58">Venezuela (+58)</option>
                                    <option value="+60">Malaysia (+60)</option>
                                    <option value="+61">Australia (+61)</option>
                                    <option value="+62">Indonesia (+62)</option>
                                    <option value="+63">Philippines (+63)</option>
                                    <option value="+64">New Zealand (+64)</option>
                                    <option value="+65">Singapore (+65)</option>
                                    <option value="+66">Thailand (+66)</option>
                                    <option value="+81">Japan (+81)</option>
                                    <option value="+82">South Korea (+82)</option>
                                    <option value="+84">Vietnam (+84)</option>
                                    <option value="+86">China (+86)</option>
                                    <option value="+90">Turkey (+90)</option>
                                    <option value="+91">India (+91)</option>
                                    <option value="+92">Pakistan (+92)</option>
                                    <option value="+93">Afghanistan (+93)</option>
                                    <option value="+94">Sri Lanka (+94)</option>
                                    <option value="+95">Myanmar (+95)</option>
                                    <option value="+98">Iran (+98)</option>
                                    <option value="+211">South Sudan (+211)</option>
                                    <option value="+212">Morocco (+212)</option>
                                    <option value="+213">Algeria (+213)</option>
                                    <option value="+216">Tunisia (+216)</option>
                                    <option value="+218">Libya (+218)</option>
                                    <option value="+220">Gambia (+220)</option>
                                    <option value="+221">Senegal (+221)</option>
                                    <option value="+222">Mauritania (+222)</option>
                                    <option value="+223">Mali (+223)</option>
                                    <option value="+224">Guinea (+224)</option>
                                    <option value="+225">Ivory Coast (+225)</option>
                                    <option value="+226">Burkina Faso (+226)</option>
                                    <option value="+227">Niger (+227)</option>
                                    <option value="+228">Togo (+228)</option>
                                    <option value="+229">Benin (+229)</option>
                                    <option value="+230">Mauritius (+230)</option>
                                    <option value="+231">Liberia (+231)</option>
                                    <option value="+232">Sierra Leone (+232)</option>
                                    <option value="+233">Ghana (+233)</option>
                                    <option value="+234">Nigeria (+234)</option>
                                    <option value="+235">Chad (+235)</option>
                                    <option value="+236">Central African Republic (+236)</option>
                                    <option value="+237">Cameroon (+237)</option>
                                    <option value="+238">Cape Verde (+238)</option>
                                    <option value="+239">São Tomé and Príncipe (+239)</option>
                                    <option value="+240">Equatorial Guinea (+240)</option>
                                    <option value="+241">Gabon (+241)</option>
                                    <option value="+242">Republic of the Congo (+242)</option>
                                    <option value="+243">Democratic Republic of the Congo (+243)</option>
                                    <option value="+244">Angola (+244)</option>
                                    <option value="+245">Guinea-Bissau (+245)</option>
                                    <option value="+246">British Indian Ocean Territory (+246)</option>
                                    <option value="+248">Seychelles (+248)</option>
                                    <option value="+249">Sudan (+249)</option>
                                    <option value="+250">Rwanda (+250)</option>
                                    <option value="+251">Ethiopia (+251)</option>
                                    <option value="+252">Somalia (+252)</option>
                                    <option value="+253">Djibouti (+253)</option>
                                    <option value="+254">Kenya (+254)</option>
                                    <option value="+255">Tanzania (+255)</option>
                                    <option value="+256">Uganda (+256)</option>
                                    <option value="+257">Burundi (+257)</option>
                                    <option value="+258">Mozambique (+258)</option>
                                    <option value="+260">Zambia (+260)</option>
                                    <option value="+261">Madagascar (+261)</option>
                                    <option value="+262">Réunion (+262)</option>
                                    <option value="+263">Zimbabwe (+263)</option>
                                    <option value="+264">Namibia (+264)</option>
                                    <option value="+265">Malawi (+265)</option>
                                    <option value="+266">Lesotho (+266)</option>
                                    <option value="+267">Botswana (+267)</option>
                                    <option value="+268">Eswatini (+268)</option>
                                    <option value="+269">Comoros (+269)</option>
                                    <option value="+290">Saint Helena (+290)</option>
                                    <option value="+291">Eritrea (+291)</option>
                                    <option value="+297">Aruba (+297)</option>
                                    <option value="+298">Faroe Islands (+298)</option>
                                    <option value="+299">Greenland (+299)</option>
                                </select>
                            </div>
                            <div class="w-7/12">
                                <input wire:model.live="whatsAppPhone" type="text"
                                    class="px-4 text-lg block w-full border-gray-500 rounded focus:border-indigo-600 focus:ring-indigo-600" />
                                @error('whatsAppPhone')
                                    <span
                                        class="bg-red-200 px-2 py-1 text-red-700 text-sm font-medium rounded-md inline-block mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="flex items-center">
                            <i class="fas fa-map-marker-alt text-teal-600 me-1"></i>
                            <label for="iframeGoogleMap">Iframe Url Google Map Src</label>
                        </div>
                        <textarea rows="5" wire:model.live="iframeGoogleMap"
                            class="px-4 text-lg block w-full border-gray-500 rounded focus:border-indigo-600 focus:ring-indigo-600"></textarea>
                        @error('iframeGoogleMap')
                            <span
                                class="bg-red-200 px-2 py-1 text-red-700 text-sm font-medium rounded-md inline-block mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <div class="flex items-center">
                            <i class="fa-regular fa-calendar text-teal-600 me-1"></i>
                            <label for="calendlyUrl">Calendly Url</label>
                        </div>
                        <input wire:model.live="calendlyUrl" type="text"
                            class="px-4 text-lg block w-full border-gray-500 rounded focus:border-indigo-600 focus:ring-indigo-600" />
                        @error('calendlyUrl')
                            <span
                                class="bg-red-200 px-2 py-1 text-red-700 text-sm font-medium rounded-md inline-block mt-1">{{ $message }}</span>
                        @enderror
                    </div>
            </div>

            <div class="my-10">
                <div class="flex items-center my-3">
                    <i class="fa-solid fa-square-share-nodes fa-2x text-indigo-600 mr-2"></i>
                    <h4>Social Medias</h4>
                </div>
                <div class="mb-4">
                    <div class="flex items-center">
                        <i class="fab fa-facebook text-indigo-800 me-1"></i>
                        <label for="linkFacebook">Link Facebook</label>
                    </div>
                    <input wire:model.live="linkFacebook" type="text"
                        class="px-4 text-lg block w-full border-gray-500 rounded focus:border-indigo-600 focus:ring-indigo-600" />
                    @error('linkFacebook')
                        <span
                            class="bg-red-200 px-2 py-1 text-red-700 text-sm font-medium rounded-md inline-block mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <div class="flex items-center">
                        <i class="fab fa-twitter text-indigo-500 me-1"></i>
                        <label for="linkTwitter">Link Twitter</label>
                    </div>
                    <input wire:model.live="linkTwitter" type="text"
                        class="px-4 text-lg block w-full border-gray-500 rounded focus:border-indigo-600 focus:ring-indigo-600" />
                    @error('linkTwitter')
                        <span
                            class="bg-red-200 px-2 py-1 text-red-700 text-sm font-medium rounded-md inline-block mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <div class="flex items-center">
                        <i class="fa-brands fa-pinterest me-1 text-red-500"></i>
                        <label for="linkPinterest">Link Pinterest</label>
                    </div>
                    <input wire:model.live="linkPinterest" type="text"
                        class="px-4 text-lg block w-full border-gray-500 rounded focus:border-indigo-600 focus:ring-indigo-600 disabled:opacity-50 disabled:pointer-events-none" />
                    @error('linkPinterest')
                        <span
                            class="bg-red-200 px-2 py-1 text-red-700 text-sm font-medium rounded-md inline-block  text-left mt-1">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="mb-4">
                    <div class="flex items-center">
                        <i class="fa-brands fa-square-instagram me-1 text-violet-500"></i>
                        <label for="linkPinterest">Link Instagram</label>
                    </div>
                    <input wire:model.live="linkInstagram" type="text"
                        class="px-4 text-lg block w-full border-gray-500 rounded focus:border-indigo-600 focus:ring-indigo-600 disabled:opacity-50 disabled:pointer-events-none" />
                    @error('linkInstagram')
                        <span
                            class="bg-red-200 px-2 py-1 text-red-700 text-sm font-medium rounded-md inline-block  text-left mt-1">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mt-4 flex justify-end">
                <button type="submit"
                    class="btn bg-indigo-600 text-white border-indigo-600 hover:bg-indigo-800 focus:ring-indigo-300">Update</button>
            </div>
            </form>
        </div>
    </div>
</div>
