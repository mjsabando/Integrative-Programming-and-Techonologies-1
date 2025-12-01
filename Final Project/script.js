const countryList = {
    AED: { code: "AE", name: "United Arab Emirates Dirham" },
    AFN: { code: "AF", name: "Afghan Afghani" },
    XCD: { code: "AG", name: "East Caribbean Dollar" },
    ALL: { code: "AL", name: "Albanian Lek" },
    AMD: { code: "AM", name: "Armenian Dram" },
    ANG: { code: "AN", name: "Neth. Antillean Guilder" },
    AOA: { code: "AO", name: "Angolan Kwanza" },
    ARS: { code: "AR", name: "Argentine Peso" },
    AUD: { code: "AU", name: "Australian Dollar" },
    AZN: { code: "AZ", name: "Azerbaijani Manat" },
    BAM: { code: "BA", name: "Bosnia-Herz. Mark" },
    BBD: { code: "BB", name: "Barbadian Dollar" },
    BDT: { code: "BD", name: "Bangladeshi Taka" },
    XOF: { code: "BE", name: "CFA Franc BCEAO" },
    BGN: { code: "BG", name: "Bulgarian Lev" },
    BHD: { code: "BH", name: "Bahraini Dinar" },
    BIF: { code: "BI", name: "Burundian Franc" },
    BMD: { code: "BM", name: "Bermudian Dollar" },
    BND: { code: "BN", name: "Brunei Dollar" },
    BOB: { code: "BO", name: "Bolivian Boliviano" },
    BRL: { code: "BR", name: "Brazilian Real" },
    BSD: { code: "BS", name: "Bahamian Dollar" },
    NOK: { code: "NO", name: "Norwegian Krone" },
    BWP: { code: "BW", name: "Botswana Pula" },
    BYR: { code: "BY", name: "Belarusian Ruble" },
    BZD: { code: "BZ", name: "Belize Dollar" },
    CAD: { code: "CA", name: "Canadian Dollar" },
    CDF: { code: "CD", name: "Congolese Franc" },
    XAF: { code: "CF", name: "CFA Franc BEAC" },
    CHF: { code: "CH", name: "Swiss Franc" },
    CLP: { code: "CL", name: "Chilean Peso" },
    CNY: { code: "CN", name: "Chinese Yuan" },
    COP: { code: "CO", name: "Colombian Peso" },
    CRC: { code: "CR", name: "Costa Rican Colón" },
    CUP: { code: "CU", name: "Cuban Peso" },
    CVE: { code: "CV", name: "Cape Verdean Escudo" },
    CZK: { code: "CZ", name: "Czech Koruna" },
    DJF: { code: "DJ", name: "Djiboutian Franc" },
    DKK: { code: "DK", name: "Danish Krone" },
    DOP: { code: "DO", name: "Dominican Peso" },
    DZD: { code: "DZ", name: "Algerian Dinar" },
    EGP: { code: "EG", name: "Egyptian Pound" },
    EUR: { code: "FR", name: "Euro" },
    FJD: { code: "FJ", name: "Fijian Dollar" },
    GBP: { code: "GB", name: "British Pound" },
    GEL: { code: "GE", name: "Georgian Lari" },
    GHS: { code: "GH", name: "Ghanaian Cedi" },
    GMD: { code: "GM", name: "Gambian Dalasi" },
    GNF: { code: "GN", name: "Guinean Franc" },
    GTQ: { code: "GT", name: "Guatemalan Quetzal" },
    GYD: { code: "GY", name: "Guyanaese Dollar" },
    HKD: { code: "HK", name: "Hong Kong Dollar" },
    HNL: { code: "HN", name: "Honduran Lempira" },
    HRK: { code: "HR", name: "Croatian Kuna" },
    HTG: { code: "HT", name: "Haitian Gourde" },
    HUF: { code: "HU", name: "Hungarian Forint" },
    IDR: { code: "ID", name: "Indonesian Rupiah" },
    ILS: { code: "IL", name: "Israeli New Shekel" },
    INR: { code: "IN", name: "Indian Rupee" },
    IQD: { code: "IQ", name: "Iraqi Dinar" },
    IRR: { code: "IR", name: "Iranian Rial" },
    ISK: { code: "IS", name: "Icelandic Króna" },
    JMD: { code: "JM", name: "Jamaican Dollar" },
    JOD: { code: "JO", name: "Jordanian Dinar" },
    JPY: { code: "JP", name: "Japanese Yen" },
    KES: { code: "KE", name: "Kenyan Shilling" },
    KGS: { code: "KG", name: "Kyrgystani Som" },
    KHR: { code: "KH", name: "Cambodian Riel" },
    KMF: { code: "KM", name: "Comorian Franc" },
    KPW: { code: "KP", name: "North Korean Won" },
    KRW: { code: "KR", name: "South Korean Won" },
    KWD: { code: "KW", name: "Kuwaiti Dinar" },
    KYD: { code: "KY", name: "Cayman Islands Dollar" },
    KZT: { code: "KZ", name: "Kazakhstani Tenge" },
    LAK: { code: "LA", name: "Laotian Kip" },
    LBP: { code: "LB", name: "Lebanese Pound" },
    LKR: { code: "LK", name: "Sri Lankan Rupee" },
    LRD: { code: "LR", name: "Liberian Dollar" },
    LSL: { code: "LS", name: "Lesotho Loti" },
    LYD: { code: "LY", name: "Libyan Dinar" },
    MAD: { code: "MA", name: "Moroccan Dirham" },
    MDL: { code: "MD", name: "Moldovan Leu" },
    MGA: { code: "MG", name: "Malagasy Ariary" },
    MKD: { code: "MK", name: "Macedonian Denar" },
    MMK: { code: "MM", name: "Myanmar Kyat" },
    MNT: { code: "MN", name: "Mongolian Tugrik" },
    MOP: { code: "MO", name: "Macanese Pataca" },
    MUR: { code: "MU", name: "Mauritian Rupee" },
    MVR: { code: "MV", name: "Maldivian Rufiyaa" },
    MWK: { code: "MW", name: "Malawian Kwacha" },
    MXN: { code: "MX", name: "Mexican Peso" },
    MYR: { code: "MY", name: "Malaysian Ringgit" },
    MZN: { code: "MZ", name: "Mozambican Metical" },
    NAD: { code: "NA", name: "Namibian Dollar" },
    NGN: { code: "NG", name: "Nigerian Naira" },
    NIO: { code: "NI", name: "Nicaraguan Córdoba" },
    NPR: { code: "NP", name: "Nepalese Rupee" },
    NZD: { code: "NZ", name: "New Zealand Dollar" },
    OMR: { code: "OM", name: "Omani Rial" },
    PAB: { code: "PA", name: "Panamanian Balboa" },
    PEN: { code: "PE", name: "Peruvian Nuevo Sol" },
    PGK: { code: "PG", name: "Papua New Guinean Kina" },
    PHP: { code: "PH", name: "Philippine Peso" },
    PKR: { code: "PK", name: "Pakistani Rupee" },
    PLN: { code: "PL", name: "Polish Zloty" },
    PYG: { code: "PY", name: "Paraguayan Guarani" },
    QAR: { code: "QA", name: "Qatari Rial" },
    RON: { code: "RO", name: "Romanian Leu" },
    RSD: { code: "RS", name: "Serbian Dinar" },
    RUB: { code: "RU", name: "Russian Ruble" },
    RWF: { code: "RW", name: "Rwandan Franc" },
    SAR: { code: "SA", name: "Saudi Riyal" },
    SBD: { code: "SB", name: "Solomon Islands Dollar" },
    SCR: { code: "SC", name: "Seychellois Rupee" },
    SDG: { code: "SD", name: "Sudanese Pound" },
    SEK: { code: "SE", name: "Swedish Krona" },
    SGD: { code: "SG", name: "Singapore Dollar" },
    SLL: { code: "SL", name: "Sierra Leonean Leone" },
    SOS: { code: "SO", name: "Somali Shilling" },
    SRD: { code: "SR", name: "Surinamese Dollar" },
    SVC: { code: "SV", name: "Salvadoran Colón" },
    SYP: { code: "SY", name: "Syrian Pound" },
    SZL: { code: "SZ", name: "Swazi Lilangeni" },
    THB: { code: "TH", name: "Thai Baht" },
    TJS: { code: "TJ", name: "Tajikistani Somoni" },
    TMT: { code: "TM", name: "Turkmenistani Manat" },
    TND: { code: "TN", name: "Tunisian Dinar" },
    TOP: { code: "TO", name: "Tongan Pa'anga" },
    TRY: { code: "TR", name: "Turkish Lira" },
    TTD: { code: "TT", name: "Trinidad & Tobago Dollar" },
    TWD: { code: "TW", name: "New Taiwan Dollar" },
    TZS: { code: "TZ", name: "Tanzanian Shilling" },
    UAH: { code: "UA", name: "Ukrainian Hryvnia" },
    UGX: { code: "UG", name: "Ugandan Shilling" },
    USD: { code: "US", name: "United States Dollar" },
    UYU: { code: "UY", name: "Uruguayan Peso" },
    UZS: { code: "UZ", name: "Uzbekistani Som" },
    VEF: { code: "VE", name: "Venezuelan Bolívar" },
    VND: { code: "VN", name: "Vietnamese Dong" },
    VUV: { code: "VU", name: "Vanuatu Vatu" },
    YER: { code: "YE", name: "Yemeni Rial" },
    ZAR: { code: "ZA", name: "South African Rand" },
    ZMK: { code: "ZM", name: "Zambian Kwacha" },
    ZWD: { code: "ZW", name: "Zimbabwean Dollar" }
};


const BASE_URL = "https://cdn.jsdelivr.net/npm/@fawazahmed0/currency-api@latest/v1/currencies";
const fromDropdown = document.getElementById("from-dropdown");
const toDropdown = document.getElementById("to-dropdown");
const swapBtn = document.querySelector(".swap-icon");
const getRateBtn = document.getElementById("get-rate-btn");
const msg = document.querySelector(".msg");
const lastUpdatedMsg = document.querySelector(".last-updated");


const setupDropdown = (dropdownElement, initialCurrency) => {
    const selectedOption = dropdownElement.querySelector(".selected-option");
    const optionsContainer = dropdownElement.querySelector(".options-container");
    const optionsList = dropdownElement.querySelector(".options-list");
    const searchInput = dropdownElement.querySelector(".search-box input");
    const flagImg = selectedOption.querySelector("img");
    const currCodeText = selectedOption.querySelector(".currency-code");

    
    dropdownElement.dataset.value = initialCurrency;
    flagImg.src = `https://flagsapi.com/${countryList[initialCurrency].code}/flat/64.png`;
    currCodeText.innerText = initialCurrency;

    
    for (let code in countryList) {
        let li = document.createElement("li");
        li.className = "option-item";
        li.innerHTML = `
            <img src="https://flagsapi.com/${countryList[code].code}/flat/64.png" alt="flag">
            <div>
                <span style="font-weight:600">${code}</span>
                <div class="country-name">${countryList[code].name}</div>
            </div>
        `;
        li.dataset.code = code;

        
        li.addEventListener("click", () => {
            dropdownElement.dataset.value = code;
            flagImg.src = `https://flagsapi.com/${countryList[code].code}/flat/64.png`;
            currCodeText.innerText = code;
            optionsContainer.classList.add("hidden");
            dropdownElement.classList.remove("active");
            updateExchangeRate(); 
        });

        optionsList.appendChild(li);
    }

    
    selectedOption.addEventListener("click", (e) => {
        
        document.querySelectorAll(".options-container").forEach(el => {
            if (el !== optionsContainer) el.classList.add("hidden");
        });
        document.querySelectorAll(".custom-dropdown").forEach(el => {
            if (el !== dropdownElement) el.classList.remove("active");
        });

        optionsContainer.classList.toggle("hidden");
        dropdownElement.classList.toggle("active");
        
        
        if (!optionsContainer.classList.contains("hidden")) {
            searchInput.value = "";
            filterOptions("");
            searchInput.focus();
        }
        e.stopPropagation();
    });

    
    const filterOptions = (term) => {
        term = term.toLowerCase();
        const items = optionsList.querySelectorAll("li");
        items.forEach(item => {
            const code = item.dataset.code.toLowerCase();
            const name = countryList[item.dataset.code].name.toLowerCase();
            if (code.includes(term) || name.includes(term)) {
                item.style.display = "flex";
            } else {
                item.style.display = "none";
            }
        });
    };

    searchInput.addEventListener("input", (e) => {
        filterOptions(e.target.value);
    });
};


setupDropdown(fromDropdown, "USD");
setupDropdown(toDropdown, "PHP");


document.addEventListener("click", (e) => {
    if (!e.target.closest(".custom-dropdown")) {
        document.querySelectorAll(".options-container").forEach(el => el.classList.add("hidden"));
        document.querySelectorAll(".custom-dropdown").forEach(el => el.classList.remove("active"));
    }
});


swapBtn.addEventListener("click", () => {
    const fromVal = fromDropdown.dataset.value;
    const toVal = toDropdown.dataset.value;

    
    updateDropdownUI(fromDropdown, toVal);
    updateDropdownUI(toDropdown, fromVal);
    
    updateExchangeRate();
});


const updateDropdownUI = (dropdown, code) => {
    dropdown.dataset.value = code;
    dropdown.querySelector("img").src = `https://flagsapi.com/${countryList[code].code}/flat/64.png`;
    dropdown.querySelector(".currency-code").innerText = code;
};


const updateExchangeRate = async () => {
    let amount = document.querySelector("#amount-input");
    let amtVal = amount.value;
    if (amtVal === "" || amtVal < 1) {
        amtVal = 1;
        amount.value = "1";
    }

    const fromCurr = fromDropdown.dataset.value;
    const toCurr = toDropdown.dataset.value;

    msg.innerText = "Fetching...";
    lastUpdatedMsg.innerText = "Getting real-time rates...";

    try {
        const URL = `${BASE_URL}/${fromCurr.toLowerCase()}.json`;
        let response = await fetch(URL);
        let data = await response.json();
        let rate = data[fromCurr.toLowerCase()][toCurr.toLowerCase()];

        let finalAmount = amtVal * rate;

        
        const formatter = new Intl.NumberFormat('en-US', {
            style: 'decimal',
            minimumFractionDigits: 2,
            maximumFractionDigits: 2
        });

        msg.innerText = `${formatter.format(amtVal)} ${fromCurr} = ${formatter.format(finalAmount)} ${toCurr}`;
        lastUpdatedMsg.innerText = "Last updated: Just now";
    } catch (error) {
        msg.innerText = "Error";
        lastUpdatedMsg.innerText = "Could not fetch exchange rate";
        console.error(error);
    }
};

getRateBtn.addEventListener("click", (e) => {
    e.preventDefault();
    updateExchangeRate();
});

window.addEventListener("load", () => {
    updateExchangeRate();
});