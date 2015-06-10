//Données de l'histogramme CA 2008-2014
var dataBar = {
	labels: ["2008", "2009", "2010", "2011", "2012", "2013", "2014"],
	datasets: [
		{
			label: "Evolution annuel du CA en milliers d'euros",
			fillColor: "rgba(63, 187, 203, 0.5)",
			strokeColor: "rgba(63, 187, 203, 0.8)",
			highlightFill: "rgba(63, 187, 203, 0.75)",
			highlightStroke: "rgba(63, 187, 203, 1)",
			data: [7521.952, 8813.913, 13207.953, 11424.317, 10184, 13056, 12000.803]
			}
		]
};
//Identification du context du graphique
var canvashisto = document.getElementById('CAannuel');
var ctxBar = canvashisto.getContext('2d');
var myBarChart = new Chart(ctxBar).Bar(dataBar, {
	responsive: true,
	scaleShowVerticalLines: false
});

//Données du Doughnut CA par secteur d'activité
var dataPie = [
	{
		value: 37,
		color: "#ed9e10",
		highlight: "#fce8cc",
		label: "Réhabilitation logement en site occupé"
		},
	{
		value: 8,
		color: "#3ebaca",
		highlight: "#e3f2f6",
		label: "Rénovation ouvrages fonctionnels"
		},
	{
		value: 14,
		color: "#968881",
		highlight: "#e8e4e2",
		label: "Construction neuve"
		},
	{
		value: 40,
		color: "#9ec419",
		highlight: "#ecf3da",
		label: "Travaux sur l'enveloppe de bâtiment"
		},
	{
		value: 1,
		color: "#4e4797",
		highlight: "#dad7ed",
		label: "Installations photovoltaïques"
		}
	];

//Contexte du graphique
var ctxPie = document.getElementById('CAactivite').getContext('2d');
var myDoughnutChart = new Chart(ctxPie).Doughnut(dataPie, {
	responsive: true,
	animateScale: true
});