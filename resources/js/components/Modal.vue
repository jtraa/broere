<style>
    .modal {
        transition: opacity 0.25s ease;
    }
    body.modal-active {
        overflow-x: hidden;
        overflow-y: visible !important;
    }
</style>

<template>
    <div>
        <div v-if="showModal" class="modal fixed w-full top-0 left-0 flex items-center justify-center">
            <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
            <div class="modal-container h-1/2 bg-white w-11/12 md:max-w-2xl mx-auto rounded shadow-lg z-50 overflow-y-auto">
                <v-card>
                    <v-card-title class="font-extrabold mb-0 text-15pt lg:text-17pt text-left text-darkblue">
                        Algemene voorwaarden Broere Vliegpassages
                    </v-card-title>

                    <v-divider class="p-0 m-0"></v-divider>
                    <v-card-text class="text-12pt text-black">
                        <strong>1. Toepassingsgebied</strong>
                        <br />
                        1.1 Deze algemene voorwaarden beheersen de rechtsverhouding tussen Broere Vliegpassages b.v. enerzijds en haar opdrachtgever(s) anderzijds.
                        <br /><br />
                        <strong>2. Begripsbepalingen</strong>
                        <br />
                        2.1 Broere Vliegpassages b.v.: degene die in de uitoefening van zijn bedrijf informatie verstrekt en adviezen geeft op het gebied van reizen zulks in de ruimste zin des woords, alsmede bemiddelt bij de totstandkoming van overeenkomsten tussen de opdrachtgever en derden betreffende dienstverlening op het gebied van reizen (de dienstverlener).
                        <br />
                        2.2 Opdrachtgever: degene die aan Broere Vliegpassages b.v. opdracht geeft diensten te verlenen op het gebied van reizen.
                        <br />
                        2.3 Reiziger: de natuurlijk persoon te wiens behoeve de overeenkomst met Broere Vliegpassages b.v. en/of de dienstverlener wordt aangegaan.
                        <br />
                        2.4 Dienstverlener: de vervoerder, accommodatieverschaffer of verlener van andere diensten, met wie de opdrachtgever door middel van bemiddeling door het (zaken)reisbureau een overeenkomst aangaat. De dienstverlener is met inachtneming van de door hem gehanteerde voorwaarden verantwoordelijk voor de uitvoering van de diensten.
                        <br /><br />
                        <strong>3. Opdracht</strong><br />
                        3.1 De inhoud van de dienstverlening van Broere Vliegpassages b.v. kan bestaan uit het informeren en het adviseren van de opdrachtgever, alsmede het ten behoeve van de opdrachtgever bemiddelen bij de totstandkoming van een overeenkomst tussen de opdrachtgever en de dienstverlener.
                        <br />
                        3.2 De opdrachtgever is jegens Broere Vliegpassages b.v. en de dienstverlener gebonden aan de opdracht ongeacht of een bevestiging wordt verstrekt.
                        <br />
                        3.3 In geval een bevestiging aan de opdrachtgever wordt verstrekt, geldt deze als bewijs voor de inhoud van de overeenkomst(-en), onverminderd het bepaalde in 3.2. 3.4 De opdrachtgever is zowel jegens het (zaken)reisbureau als jegens de uiteindelijke dienstverlener voor het geheel aansprakelijk voor de verplichtingen die voortvloeien uit de dienstverlening.
                        <br /><br />
                        <strong>4. Informatievoorziening</strong><br />
                        4.1 De opdrachtgever zal de voor het sluiten van de overeenkomst en de uitvoering daarvan benodigde gegevens betreffende hemzelf en/of eventuele andere reizigers verstrekken aan het (zaken)reisbureau, waaronder adressen en telefoonnummers van degenen die in geval van een calamiteit geïnformeerd dienen te worden.
                        <br />
                        4.2 De tarieven van diensten kunnen afhankelijk van de voorwaarden van de dienstverlener en conform deze voorwaarden – ook na het sluiten van de overeenkomst - worden gewijzigd. Deze wijzigingen zullen zo spoedig mogelijk worden doorgegeven en doorberekend. Indien voor een dienst van het (zaken)reisbureau zelf een vergoeding is verschuldigd zal dat vooraf bekend gemaakt worden.
                        <br />
                        4.3 Nadat de opdrachtgever en/of de reiziger het vervoerbiljet en/of andere reisbescheiden heeft ontvangen zullen er geen tariefwijzigingen worden doorberekend.
                        <br />
                        4.4 De opdrachtgever dient er voor zorg te dragen dat hij en/of de andere reizigers bij vertrek in het bezit zijn van de benodigde documenten zoals onder andere een geldig paspoort en de eventuele vereiste visa, bewijzen van inentingen en vaccinaties.
                        <br />
                        4.5 De opdrachtgever en/of de reiziger zal zelf bij de betrokken autoriteiten de benodigde aanvullende informatie inwinnen en tevens tijdig vóór vertrek nagaan of de eerder ingewonnen informatie nog correct is.
                        <br />
                        4.6 De opdrachtgever en/of de reiziger dient zich te houden aan de aanwijzingen door of namens de dienstverlener verstrekt en in het bijzonder aan de van toepassing
                        zijnde inchecktijden en/of geadviseerde overstaptijden.
                        <br /><br />
                        <strong>5. Wijzigingen en annuleringen</strong><br />
                        5.1 Annuleringen van, of wijzigingen in, verstrekte opdrachten kunnen alleen op verzoek van de opdrachtgever en dan alleen op de voor het (zaken)reisbureau gebruikelijke openingstijden plaatsvinden.
                        <br />
                        5.2 Indien op verzoek van de opdrachtgever annulering plaatsvindt of wijzigingen worden aangebracht in reeds gemaakte reserveringen zullen de daaraan verbonden kosten in rekening worden gebracht. Dat kunnen naast door de dienstverlener in rekening gebrachte kosten ook al kosten zijn die Broere Vliegpassages b.v. zelf in rekening brengt om de annulering en/of wijziging tot stand te brengen.
                        <br />
                        5.3 Indien de opdrachtgever rechtstreeks de dienst annuleert of wijzigt zijn de daaraan verbonden kosten voor zijn rekening.
                        <br /><br />
                        <strong>6. Aansprakelijkheid</strong><br />
                        6.1 Broere Vliegpassages b.v. zal zo zorgvuldig als in de gegeven omstandigheden in redelijkheid mag worden verwacht de belangen van de opdrachtgever en de reiziger in acht nemen.
                        <br />
                        6.2 Broere Vliegpassages b.v. aanvaardt geen aansprakelijkheid voor handelingen en/of nalatigheden van de betrokken dienstverleners bij de uitvoering van de diensten, noch voor de juistheid van de door deze dienstverleners verstrekte informatie, waaronder ook begrepen de juistheid van door of namens deze dienstverleners afkomstige foto’s, foldermateriaal en/of ander voorlichtingsmateriaal. Voor financieel onvermogen van de dienstverlener is het zakenreisbureau niet aansprakelijk.
                        <br />
                        6.3 Indien Broere Vliegpassages b.v. toerekenbaar tekortschiet is zijn aansprakelijkheid voor schade van de opdrachtgever en/of de reiziger beperkt tot éénmaal de op de factuur genoemde reissom. Indien de overeenkomst dienaangaande ontbonden wordt zal het (zaken)reisbureau daarenboven de eventueel vooruitbetaalde gelden restitueren.
                        <br />
                        6.4 Broere Vliegpassages b.v.s niet aansprakelijk voor vertragingen die de reiziger oploopt en de eventueel daaruit voortvloeiende schade ten gevolge van welke oorzaak dan ook. Onder andere valt hieronder doch niet uitsluitend vertragingen veroorzaakt door technische mankementen aan het vervoermiddel; weersomstandigheden; drukte in het verkeer; stakingen, en/of blokkades; het missen van aansluitingen; overboekingen; wijzigingen in de reis aangebracht door de dienstverlener; annulering door de dienstverlener. 6.5 De in deze paragraaf opgenomen uitsluitingen en beperkingen gelden mede ten behoeve van het personeel van de reisagent.
                        <br /><br />
                        <strong>7. Betaling</strong><br />
                        7.1 Alle facturen dienen binnen tien dagen aan Broere Vliegpassages b.v. op de door hem aangegeven wijze te zijn voldaan.
                        <br />
                        7.2 Bij niet-tijdige betaling is de opdrachtgever onmiddellijk in verzuim en de wettelijke rente verschuldigd over het openstaande bedrag. Voorts is de opdrachtgever gehouden tot vergoeding van de buitengerechtelijke kosten, waaronder begrepen kosten ter vaststelling van schade en aansprakelijkheid en die ter verkrijging van betaling buiten rechte, begroot op 15% van de hoofdsom met een minimum van 70 euro.
                        <br /><br />
                        <strong>8. Toepasselijk recht</strong><br />
                        8.1 Op alle geschillen die ontstaan tussen Broere Vliegpassages b.v. en de opdrachtgever en/of reiziger is Nederlands recht van toepassing.
                        <br />
                        8.2 Tenzij het (zaken)reisbureau anders verkiest of de Wet dwingend voorschrijft dat een andere rechter bevoegd is, zal de rechter waar de woonplaats van het (zaken)reisbureau is gevestigd, bevoegd zijn van geschillen kennis te nemen.
                    </v-card-text>

                    <v-divider class="p-0 m-0"></v-divider>

                    <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn @click="$emit('close')" class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Close</v-btn>
                    </v-card-actions>
                </v-card>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['showModal'],
        methods: {
            escapeKeyListener(evt) {
                if (evt.key === "Escape" || evt.key === "Esc") {
                    this.showModal = false;
                }
            }
        },
        mounted() {
            window.addEventListener('keydown', this.escapeKeyListener);
        },
        beforeDestroy() {
            window.removeEventListener('keydown', this.escapeKeyListener);
        }
    }
</script>
