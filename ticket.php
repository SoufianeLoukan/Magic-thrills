<?php 
    $title = "Ticket bestellen";
    include_once "components/wrapper.php";
?>

<div class="ticket-header">
    <h2>
        Koop tickets voor Walibi Holland
    </h2>
</div>

<div class="ticket-wrapper"> 
    
    
    <div class="tickets">
        <div id="date-selection">
            <input id="ticket-date" type="date" value="<?= date('Y-m-d') ?>" min="<?= date('Y-m-d') ?>" max="<?= date('Y-m-d', mktime(0, 0, 0, date("m"), date("d"), date("Y")+1)) ?>"/>
            <p>Geopend: van 12:00 tot 20:00</p>
            <label><input type="checkbox">UNDATED TICKETS</label>
        </div>

        <div class="ticket">
            <div class="ticket-title">E-TICKET BRIGHT NIGHTS</div>
            <div class="ticket-price">
                <p class="number"><span>27</span>€50</p> 
                <p class="per-stuk">Per stuk</p>
            </div>
            <div class="ticket-amount">
                Aantal:
                <input type="number" value="0" min="0" max="19"/>
            </div>
            <div class="ticket-info-button" >Meer info</div>

            <div class="ticket-info display-none">
                Ticket op datum. Entreeticket voor iedereen vanaf 6 jaar. Kinderen t/m 2 jaar hebben gratis entree.
                <br>
                Bright Nights is op 17 en 23 december, 26 t/m 30 december 2023 en 2 t/m 7 januari 2024. Walibi is die dagen geopend van 12:00 tot 20:00 uur.  
            </div>
        </div>

        <div class="ticket">
            <div class="ticket-title">E-TICKET 3-5 JR. BRIGHT NIGHTS</div>
            <div class="ticket-price">
                <p class="number"><span>17</span>€25</p> 
                <p class="per-stuk">Per stuk</p>
            </div>
            <div class="ticket-amount">
                Aantal:
                <input type="number" value="0" min="0" max="19"/>
            </div>
            <div class="ticket-info-button" >Meer info</div>

            <div class="ticket-info display-none">
                Ticket op datum. Entreeticket voor iedereen vanaf 6 jaar. Kinderen t/m 2 jaar hebben gratis entree.
                <br>
                Bright Nights is op 17 en 23 december, 26 t/m 30 december 2023 en 2 t/m 7 januari 2024. Walibi is die dagen geopend van 12:00 tot 20:00 uur.  
            </div>
        </div>

        <div class="ticket">
            <div class="ticket-title">E-TICKET 6-11 JR.- BRIGHT NIGHTS</div>
            <div class="ticket-price">
                <p class="number"><span>26</span>€00</p> 
                <p class="per-stuk">Per stuk</p>
            </div>
            <div class="ticket-amount">
                Aantal:
                <input type="number" value="0" min="0" max="19"/>
            </div>
            <div class="ticket-info-button" >Meer info</div>

            <div class="ticket-info display-none">
                Ticket op datum. Entreeticket voor iedereen vanaf 6 jaar. Kinderen t/m 2 jaar hebben gratis entree.
                <br>
                Bright Nights is op 17 en 23 december, 26 t/m 30 december 2023 en 2 t/m 7 januari 2024. Walibi is die dagen geopend van 12:00 tot 20:00 uur.  
            </div>
        </div>

        <div class="ticket">
            <div class="ticket-title">E-TICKET 55+ BRIGHT NIGHTS</div>
            <div class="ticket-price">
                <p class="number"><span>26</span>€00</p> 
                <p class="per-stuk">Per stuk</p>
            </div>
            <div class="ticket-amount">
                Aantal:
                <input type="number" value="0" min="0" max="19"/>
            </div>
            <div class="ticket-info-button" >Meer info</div>

            <div class="ticket-info display-none">
                Ticket op datum. Entreeticket voor iedereen vanaf 6 jaar. Kinderen t/m 2 jaar hebben gratis entree.
                <br>
                Bright Nights is op 17 en 23 december, 26 t/m 30 december 2023 en 2 t/m 7 januari 2024. Walibi is die dagen geopend van 12:00 tot 20:00 uur.  
            </div>
        </div>

        <div class="ticket">
            <div class="ticket-title">E-TICKET FAMILY DEAL - BRIGHTNIGHTS</div>
            <div class="ticket-price">
                <p class="number"><span>26</span>€00</p> 
                <p class="per-stuk">Per stuk</p>
            </div>
            <div class="ticket-amount">
                Aantal:
                <input type="number" value="0" min="0" max="19"/>
            </div>
            <div class="ticket-info-button" >Meer info</div>

            <div class="ticket-info display-none">
                Ticket op datum. Entreeticket voor iedereen vanaf 6 jaar. Kinderen t/m 2 jaar hebben gratis entree.
                <br>
                Bright Nights is op 17 en 23 december, 26 t/m 30 december 2023 en 2 t/m 7 januari 2024. Walibi is die dagen geopend van 12:00 tot 20:00 uur.  
            </div>
        </div>

        <div class="ticket">
            <div class="ticket-title">E-TICKET MINDERVALIDE - BRIGHT NIGHTS</div>
            <div class="ticket-price">
                <p class="number"><span>26</span>€00</p> 
                <p class="per-stuk">Per stuk</p>
            </div>
            <div class="ticket-amount">
                Aantal:
                <input type="number" value="0" min="0" max="19"/>
            </div>
            <div class="ticket-info-button" >Meer info</div>

            <div class="ticket-info display-none">
                Ticket op datum. Entreeticket voor iedereen vanaf 6 jaar. Kinderen t/m 2 jaar hebben gratis entree.
                <br>
                Bright Nights is op 17 en 23 december, 26 t/m 30 december 2023 en 2 t/m 7 januari 2024. Walibi is die dagen geopend van 12:00 tot 20:00 uur.  
            </div>
        </div>

    </div>

    <div class="order">

        <div class="order-title">Besteloverzicht</div>

        <h4 class="order-tickets">Tickets</h4>
        <div class="order-ticket">
            <p class="order-ticket-title">E-ticket Bright Nights</p>
            <p class="order-ticket-date">23/12/23</p>
            <p class="order-ticket-price">€ 27.50
            <span class="order-amount">- 19 +</span></p>
        </div>

        <div class="order-ticket">
            <p class="order-ticket-title">E-ticket 3-5 Jr. Bright Nights</p>
            <p class="order-ticket-date">23/12/23</p>
            <p class="order-ticket-price">€ 17.25
            <span class="order-amount">- 19 +</span></p>
        </div>

        <div class="order-ticket">
            <p class="order-ticket-title">E-ticket 6-11 Jr.- Bright Nights</p>
            <p class="order-ticket-date">23/12/23</p>
            <p class="order-ticket-price">€ 26.00
            <span class="order-amount">- 19 +</span></p>
        </div>

        <div class="order-total">Totaal:€ 2436.25 (99)</div>
        <button class="order-button">Betaal</button>
    </div>
</div>

<script>
document.querySelectorAll(".ticket-info-button").forEach(el => {
    el.addEventListener("click", e => e.srcElement.parentElement.querySelector('.ticket-info').classList.toggle("display-none"))
})
</script>


<?php include_once "components/footer.php" ?>