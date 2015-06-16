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
var canvas = document.getElementById('CAactivite');
var ctxPie = canvas.getContext('2d');
var myDoughnutChart = new Chart(ctxPie).Doughnut(dataPie, {
	responsive: true,
	animateScale: true,
	tooltipTemplate: "<%if (label){%><%=label%> : <%}%><%= value %>%",
	legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%> : <%=segments[i].value%>%<%}%></li><%}%></ul>"
});
//Création de la légende du graphique
document.getElementById("legendPie").innerHTML = myDoughnutChart.generateLegend();