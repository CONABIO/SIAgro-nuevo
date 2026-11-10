const esProduccion = window.location.hostname === 'siagro.conabio.gob.mx';

async function countEjemplares() {
    const el = document.getElementById("ejemplares");
    if (esProduccion) {
        try {
            let response = await axios.get("https://api.enciclovida.mx/v2/especies/conteo?uso=11-4-0-0-0-0-0&uso=11-16-0-0-0-0-0&uso=11-5-0-0-0-0-0&uso=11-40-1-0-0-0-0&uso=11-40-2-0-0-0-0&uso=11-8-0-0-0-0-0&uso=11-47-0-0-0-0-0&uso=11-9-0-0-0-0-0&uso=11-10-0-0-0-0-0&uso=11-11-0-0-0-0-0&uso=11-13-0-0-0-0-0&uso=11-15-0-0-0-0-0&uso=25-1-0-0-0-0-0&uso=11-14-0-0-0-0-0&pagina=1&por_pagina=50");
            if (response.data && response.data.totales) {
                el.textContent = response.data.totales.toLocaleString('en-US');
                return;
            }
        } catch (e) {}
    }
    // En local / desarrollo coloca la cifra sin disparar el error de CORS
    if (el) el.textContent = "7,783";
}

async function countEspecies() {
    const el = document.getElementById("especies");
    if (esProduccion) {
        try {
            let response = await axios.get("https://api.enciclovida.mx/v2/especies/conteo?uso=11-40-2-0-0-0-0&pagina=1&por_pagina=50");
            if (response.data && response.data.totales) {
                el.textContent = response.data.totales.toLocaleString('en-US');
                return;
            }
        } catch (e) {}
    }
    if (el) el.textContent = "1,368";
}

async function countGeneros() {
    const el = document.getElementById("generos");
    if (esProduccion) {
        try {
            let response = await axios.get("https://api.enciclovida.mx/v2/especies/conteo?uso=25-1-0-0-0-0-0&pagina=1&por_pagina=50");
            if (response.data && response.data.totales) {
                el.textContent = response.data.totales.toLocaleString('en-US');
                return;
            }
        } catch (e) {}
    }
    if (el) el.textContent = "2,363";
}

async function countMaices() {
    try {
        let query = `query countRecords { countRegistros }`;
        let response = await axios.post("https://maices-siagro.conabio.gob.mx/graphql", { query: query });
        let total = response.data.data.countRegistros.toLocaleString('en-US');
        let el1 = document.getElementById("ejemplaresMaices");
        let el2 = document.getElementById("maicesbases");
        if (el1) el1.textContent = total;
        if (el2) el2.textContent = total;
    } catch (e) {
        console.error("Error en countMaices:", e);
    }
}

async function countReg() {
    try {
        let query = `query countRecords { countRegistros }`;
        let response = await axios.post("https://colectas_gef-siagro.conabio.gob.mx/graphql", { query: query });
        let total = response.data.data.countRegistros.toLocaleString('en-US');
        let el1 = document.getElementById("reg");
        let el2 = document.getElementById("regcol");
        if (el1) el1.textContent = total;
        if (el2) el2.textContent = total;
    } catch (e) {
        console.error("Error en countReg:", e);
    }
}

async function countAlimentos() {
    try {
        let query = `query countRecords { countAlimentos }`;
        let response = await axios.post("https://canastas-siagro.conabio.gob.mx/graphql", { query: query });
        let total = response.data.data.countAlimentos.toLocaleString('en-US');
        let el1 = document.getElementById("alimentos");
        let el2 = document.getElementById("alimentosCa");
        if (el1) el1.textContent = total;
        if (el2) el2.textContent = total;
    } catch (e) {
        console.error("Error en countAlimentos:", e);
    }
}

async function countRegiones() {
    try {
        let query = `query countRecords { countProyectos }`;
        let response = await axios.post("https://canastas-siagro.conabio.gob.mx/graphql", { query: query });
        let total = response.data.data.countProyectos.toLocaleString('en-US');
        let el = document.getElementById("regiones");
        if (el) el.textContent = total;
    } catch (e) {
        console.error("Error en countRegiones:", e);
    }
}

async function countRegistros() {
    try {
        let query = `query countRecords { countRegistros }`;
        let response = await axios.post("https://nutricion-siagro.conabio.gob.mx/graphql", { query: query });
        let total = response.data.data.countRegistros.toLocaleString('en-US');
        let el1 = document.getElementById("registros");
        let el2 = document.getElementById("registrosNutri");
        if (el1) el1.textContent = total;
        if (el2) el2.textContent = total;
    } catch (e) {
        console.error("Error en countRegistros:", e);
    }
}

async function countConsumidas() {
    try {
        let query = `query countRecords { countTaxons }`;
        let response = await axios.post("https://focales-siagro.conabio.gob.mx/graphql", { query: query });
        let total = response.data.data.countTaxons.toLocaleString('en-US');
        let el1 = document.getElementById("consumidas");
        let el2 = document.getElementById("especiesge");
        if (el1) el1.textContent = total;
        if (el2) el2.textContent = total;
    } catch (e) {
        console.error("Error en countConsumidas:", e);
    }
}

async function getStatus() {
    try {
        let labels = [];
        let total = [];
        let query = `query countRecords {
            registros(pagination: { limit: 6000 }) {
                EstatusEcologico
            }
        }`;
        let response = await axios.post("https://colectas_gef-siagro.conabio.gob.mx/graphql", { query: query });
        let edges = response.data.data.registros;
        let size = Object.keys(edges).length;

        for (let i = 0; i < size; i++) {
            let estatus = edges[i].EstatusEcologico;
            if (estatus) {
                total.push(estatus);
                if (!labels.includes(estatus)) {
                    labels.push(estatus);
                }
            }
        }

        const count = {};
        for (const element of total) {
            count[element] = (count[element] || 0) + 1;
        }
        let dataArray = Object.values(count);

        let ctxh = document.getElementById("chart2");
        if (ctxh) {
            new Chart(ctxh, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: "Número de registros",
                        backgroundColor: ["#c45850", "#e8c3b9", "#3cba9f", "#e8c3b9", "#c45850"],
                        data: dataArray
                    }]
                },
                options: {
                    legend: { display: false },
                    title: {
                        display: true,
                        text: 'Estatus ecológico',
                        fontSize: 18
                    }
                }
            });
        }
    } catch (e) {
        console.error("Error en getStatus:", e);
    }
}

async function getManejos() {
    try {
        let labels = [];
        let total = [];
        let query = `query countRecords {
            registros(pagination: { limit: 6000 }, search: { field: TipoManejo, value: null, operator: not }) {
                TipoManejo
            }
        }`;
        let response = await axios.post("https://colectas_gef-siagro.conabio.gob.mx/graphql", { query: query });
        let edges = response.data.data.registros;
        let size = Object.keys(edges).length;

        for (let i = 0; i < size; i++) {
            let manejo = edges[i].TipoManejo;
            if (manejo) {
                let aux = manejo.split("; ");
                if (aux.length > 1) {
                    for (let j = 0; j < aux.length; j++) {
                        let m = aux[j].trim();
                        total.push(m);
                        if (!labels.includes(m)) labels.push(m);
                    }
                } else {
                    total.push(manejo);
                    if (!labels.includes(manejo)) labels.push(manejo);
                }
            }
        }

        const count = {};
        for (const element of total) {
            count[element] = (count[element] || 0) + 1;
        }
        let dataArray = Object.values(count);

        let ctx = document.getElementById("chart1");
        if (ctx) {
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: "Número de registros",
                        backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850", "#A1C349"],
                        data: dataArray
                    }]
                },
                options: {
                    legend: { display: false },
                    title: {
                        display: true,
                        text: 'Tipo de manejo',
                        fontSize: 18
                    }
                }
            });
        }
    } catch (e) {
        console.error("Error en getManejos:", e);
    }
}

try {
    if (typeof grecaptcha !== 'undefined' && grecaptcha.enterprise) {
        grecaptcha.enterprise.ready(function() {
            grecaptcha.enterprise.execute('6Ld4phwlAAAAAKU2b-ZpbjEfuiSDe3o9ZfWToafO', { action: 'login' }).then(function(token) {
                let r1 = document.getElementById('recaptchaResponse');
                let r2 = document.getElementById('reg-recaptchaResponse');
                if (r1) r1.value = token;
                if (r2) r2.value = token;
            }).catch(function(err){});

            setInterval(function(){
                grecaptcha.enterprise.execute('6Ld4phwlAAAAAKU2b-ZpbjEfuiSDe3o9ZfWToafO', { action: 'login' }).then(function(token) {
                    let r1 = document.getElementById("recaptchaResponse");
                    let r2 = document.getElementById('reg-recaptchaResponse');
                    if (r1) r1.value = token;
                    if (r2) r2.value = token;
                }).catch(function(err){});
            }, 60000);
        });
    }
} catch (e) {
    console.warn("reCAPTCHA no inicializado en entorno local.");
}

function getToken(){
    try {
        if (typeof grecaptcha !== 'undefined' && grecaptcha.enterprise) {
            grecaptcha.enterprise.ready(function() {
                grecaptcha.enterprise.execute('6Ld4phwlAAAAAKU2b-ZpbjEfuiSDe3o9ZfWToafO', { action: 'login' }).then(function(token) {
                    let r1 = document.getElementById('recaptchaResponse');
                    let r2 = document.getElementById('reg-recaptchaResponse');
                    if (r1) r1.value = token;
                    if (r2) r2.value = token;
                });
            });
        }
    } catch (e) {}
}
