// Criando um objeto de tradução
const resources = {
	pt: {
		translation: {
			//Navbar
			navbarBtn: "Download",
		}
	},
	en: {
		translation: {}
	},
};

// Função para atualizar o conteúdo da página com a tradução atual
function updateContent() { 
	//Navbar
	document.getElementById("navbarBtn").innerHTML = i18next.t("navbarBtn");
}


// Inicializando o i18next
i18next.init(
	{
		lng: "pt",
		resources: resources,
	},
	function (err, t) {
		// Inicialização completa
		updateContent();
	}
);

// Alterando o idioma
document.getElementById("change-language-pt").addEventListener("click", function () {
	i18next.changeLanguage("pt", function (err, t) {
		// Idioma alterado, atualizando o conteúdo da página
		updateContent();
	});
});

document.getElementById("change-language-en").addEventListener("click", function () {
	i18next.changeLanguage("en", function (err, t) {
		// Idioma alterado, atualizando o conteúdo da página
		updateContent();
	});
});
