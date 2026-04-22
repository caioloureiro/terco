# ✝️ O Santo Terço - Terço Online

Uma aplicação web interativa para rezar o Santo Terço de forma prática e envolvente.

Acesse pelo site:

https://digitalmd.com.br/caioloureiro/terco

---

## 👥 Para Pessoas

### O Que É?

**O Santo Terço** é uma plataforma digital que oferece uma experiência moderna e acessível para rezar o Santo Terço. A aplicação guia o usuário através de uma jornada visual e interativa de oração.

### Características Principais

- 🎯 **Contador Visual Interativo**: Acompanhe seu progresso através de um terço visual na tela com animações
- 📖 **Terço Lido**: Versão em texto completo e legível do terço, com suporte a leitura em voz alta
- 🎨 **Cores Temáticas**: Cada tipo de mistério tem uma cor única:
  - **Azul**: Mistérios Gozosos
  - **Verde**: Mistérios Luminosos
  - **Vermelho Vinho**: Mistérios Dolorosos
  - **Dourado**: Mistérios Gloriosos
- 🔊 **Leitura em Voz Alta**: Ouça o terço ser lido com diferentes vozes disponíveis
- 📱 **Responsivo**: Funciona perfeitamente em computadores, tablets e celulares
- 🕯️ **Design Elegante**: Interface intuitiva e agradável aos olhos

### Como Usar

1. **Acesse o site**: Abra em seu navegador
2. **Escolha o tipo de mistério**: Selecione entre Gozosos, Dolorosos, Gloriosos ou Luminosos
3. **Siga o guia visual**: Clique em "Próximo" para avançar na oração
4. **Use o Terço Lido**: Para uma versão em texto completo com opção de leitura em voz alta
5. **Repita a oração**: Medite sobre cada mistério de forma consciente

### Benefícios

- ✨ Facilita a concentração durante a oração
- 📚 Fornece todas as orações necessárias
- 🎯 Rastreia seu progresso visual
- 🕐 Pode ser feito em seu próprio ritmo
- 🌍 Acessível de qualquer lugar, a qualquer hora

---

## 💻 Para Desenvolvedores

### Estrutura do Projeto

O projeto segue uma arquitetura MVC (Model-View-Controller):

```
terco/
├── index.php                 # Ponto de entrada da aplicação
├── controller/               # Lógica de controle
│   ├── info.php             # Informações da aplicação
│   ├── funcoes.php          # Funções utilitárias
│   └── components.php       # Componentes reutilizáveis
├── model/                    # Modelos de dados
│   └── arrays.php           # Arrays com dados do terço
├── routes/                   # Roteamento de páginas
│   ├── main.php             # Arquivo principal de rotas
│   ├── home.php             # Rota da página inicial
│   ├── terco-lido.php       # Rota do terço em versão textual
│   ├── conteudo.php         # Rota de conteúdo dinâmico
│   ├── css.php              # Rota de arquivos CSS
│   ├── js.php               # Rota de arquivos JavaScript
│   └── 404.php              # Página de erro 404
├── view/                     # Templates e vistas
│   ├── home.php             # Página inicial com terço visual
│   ├── terco-lido.php       # Terço em formato texto
│   ├── head.php             # Meta tags e head
│   ├── menu.php             # Menu de navegação
│   ├── footer.php           # Rodapé
│   ├── misterios-*.php      # Seções de cada tipo de mistério
│   ├── pai-nosso.php        # Modal do Pai Nosso
│   ├── ave-maria.php        # Modal da Ave Maria
│   ├── gloria.php           # Modal do Glória
│   └── scripts-*.php        # Carregamento de scripts
├── css/                      # Estilos
│   ├── estilo.css           # Estilos principais
│   ├── paleta.css           # Variáveis de cores
│   ├── dinamico.css         # Estilos dinâmicos
│   ├── fontes.css           # Definição de fontes
│   ├── tablet.css           # Media queries para tablets
│   └── smartphone.css       # Media queries para celulares
├── js/                       # JavaScript
│   ├── motor.js             # Lógica principal da aplicação
│   ├── motor-top.js         # Scripts de cabeçalho
│   ├── motor-bottom.js      # Scripts de rodapé
│   └── teclado.js           # Atalhos de teclado
├── font/                     # Fontes personalizadas
│   ├── comfortaa/           # Fonte Comfortaa
│   └── parisienne/          # Fonte Parisienne
├── img/                      # Imagens e ícones
└── .htaccess                # Configuração Apache

```

### Linguagens e Tecnologias Utilizadas

#### **Backend**

**PHP 7.0+**

- Processamento do lado do servidor
- Roteamento dinâmico de páginas
- Gerenciamento de dados e arrays
- Padrão MVC (Model-View-Controller)
- Funções utilitárias e componentes reutilizáveis
- Suporte a timezone e tratamento de erros

#### **Frontend**

**HTML5**

- Semântica web correta (`<section>`, `<main>`, `<footer>`, `<header>`)
- Accessibility attributes (itemscope, itemprop para Schema.org)
- Meta tags para SEO
- Estrutura responsiva

**CSS3**

- Variáveis CSS (`:root` com `--variavel-nome`)
- Flexbox para layouts
- Grid para posicionamento
- Media Queries para responsividade
- Animações suaves (`@keyframes`, `transition`)
- Gradientes lineares
- Border-radius e box-shadow
- Pseudo-classes (`:hover`, `:active`, etc)
- Separação em múltiplos arquivos:
  - `estilo.css` - Estilos principais
  - `paleta.css` - Variáveis de cores
  - `dinamico.css` - Estilos dinâmicos baseados em classes
  - `fontes.css` - Definições de fontes
  - `tablet.css` - Media queries para tablets (1024px)
  - `smartphone.css` - Media queries para celulares (768px)

**JavaScript (Vanilla)**

- Sem dependências ou bibliotecas externas
- Manipulação do DOM
- Event listeners (click, scroll, resize, DOMContentLoaded)
- localStorage/cookies para persistência
- Seleção de elementos (querySelector, querySelectorAll)
- Manipulação de classes (classList.add, remove, toggle)
- Operações com arrays (forEach, map)
- Cálculos e lógica matemática
- Funções anônimas e callbacks

#### **APIs do Navegador**

**Web Speech API**

```javascript
// Text-to-Speech (TTS)
const synth = window.speechSynthesis;
const utter = new SpeechSynthesisUtterance(texto);
synth.speak(utter);
synth.cancel();
```

- Leitura em voz alta de texto
- Seleção de diferentes vozes do sistema
- Controle de taxa de fala
- Suporte a múltiplos idiomas

**DOM API**

- Criação e manipulação de elementos
- Event delegation
- Data attributes

**Window API**

- `window.scrollY` - Posição de scroll
- `window.innerHeight` - Altura da janela

#### **Padrões de Projeto e Técnicas**

**1. MVC (Model-View-Controller)**

```
Controller → Lógica de negócio
Model → Dados (arrays, banco)
View → Apresentação (templates PHP)
```

**2. Responsive Design**

- Mobile-first approach (opcional)
- Breakpoints específicos para tablets e smartphones
- Unidades relativas (vw, vh, %, em)
- Proporções mantidas em diferentes resoluções

**3. Progressive Enhancement**

- Funcionalidade base em HTML
- Melhorias com CSS
- Interatividade com JavaScript

**4. Componentes Reutilizáveis**

- `view/scripts-top.php` - Scripts de cabeçalho
- `view/scripts-bottom.php` - Scripts de rodapé
- `controller/components.php` - Componentes comuns

**5. Roteamento Dinâmico**

```php
if (!isset($_GET['pagina'])) {
    // Página inicial
} else {
    // Páginas dinâmicas baseadas em URL
}
```

**6. SEO (Search Engine Optimization)**

- Meta tags descritivas
- Open Graph (Facebook/Social Media)
- Twitter Cards
- Schema.org (dados estruturados com JSON-LD)
- URLs semânticas
- Canonical links

**7. Performance**

- Carregamento assíncrono de scripts
- Separação de estilos por tipo de dispositivo
- Fontes locais (sem request externo)
- Minificação potencial de assets
- Imagens otimizadas (WebP)

**8. Acessibilidade**

- Semântica HTML adequada
- Atributos ARIA quando necessário
- Contraste de cores adequado
- Navegação por teclado (com `teclado.js`)
- Suporte a leitores de tela (Web Speech API)

**9. Configuração de Servidor**

**.htaccess**

```apache
# Reescrita de URL
# Compressão GZIP
# Cache de navegador
# Headers de segurança
```

#### **Estrutura de Dados**

**Arrays PHP**

```php
$misterios_gozosos   // Array associativo com 5 elementos
$misterios_dolorosos // Array associativo com 5 elementos
$misterios_gloriosos // Array associativo com 5 elementos
$misterios_luminosos // Array associativo com 5 elementos

// Variáveis de string para orações
$sinal_da_cruz
$creio
$pai_nosso
$ave_maria
// ... etc
```

**Classes CSS Dinâmicas**

```javascript
// Aplicadas dinamicamente conforme o mistério
document.body.classList.add("corpo-gozosos");
document.body.classList.add("corpo-dolorosos");
// ... etc
```

#### **Técnicas de Interatividade**

**Manipulação de Estado**

```javascript
// Rastreamento de progresso
contador++;
document.querySelector(".item" + contador).classList.add("ativo");

// Mudança de cores baseada em estado
if (misterio === "gozosos") {
	aplicarCoresGozosas();
}
```

**Event Handling**

```javascript
// Eventos customizados
document.addEventListener('click', function() { ... });
window.addEventListener('scroll', function() { ... });
window.addEventListener('resize', function() { ... });

// Delegação de eventos
document.querySelector('.trigger').addEventListener('click', ..);
```

**Animações CSS**

```css
@keyframes fadeIn {
	from {
		opacity: 0;
	}
	to {
		opacity: 1;
	}
}

.misterio {
	animation: fadeIn 0.3s ease-in;
}
```

#### **Bibliotecas Externas**

- **Google Fonts**: Ibarra Real Nova, Segoe UI
- **Ícones**: Material Icons/Font Awesome (se utilizado)
- **Nenhuma framework JavaScript** (Vanilla JS puro)

#### **Compatibilidade de Navegadores**

Testado e funcional em:

- ✅ Chrome 80+
- ✅ Firefox 75+
- ✅ Safari 13+
- ✅ Edge 80+
- ⚠️ IE11 (com limitações de CSS Grid)
- ✅ Navegadores móveis modernos (iOS Safari, Chrome Mobile)

### Funcionalidades Principais

#### 1. Sistema de Terço Visual (index.php)

- Exibe um terço interativo com 62 elementos
- Cada clique avança para o próximo elemento
- Elementos mudam de cor conforme o tipo de oração
- Botões para navegação: Próximo, Voltar, Parar
- Menu para selecionar tipo de mistério

#### 2. Terço Lido (view/terco-lido.php)

- Versão textual completa do terço
- Seletor de vozes para leitura em voz alta
- Botão para ler o texto inteiro
- Mudança de cor de fundo por tipo de mistério
- Barra de ferramentas fixa na base

#### 3. Sistema de Cores Temáticas

Definidas em `:root` do CSS:

```css
--gozosos-bg: #0a1f3b; /* Azul escuro */
--luminosos-bg: #0f2b1a; /* Verde escuro */
--dolorosos-bg: #3a0f1f; /* Vermelho vinho */
--gloriosos-bg: #3a2810; /* Dourado */
```

#### 4. Responsividade

- Media queries para tablets: `@media (max-width: 1024px)`
- Media queries para smartphones: `@media (max-width: 768px)`
- Ajuste automático de tamanhos de fonte e espaçamento

### Fluxo de Navegação

```
Home (index.php)
│
├─ Selecionar Mistério
│  ├─ Gozosos
│  ├─ Dolorosos
│  ├─ Gloriosos
│  └─ Luminosos
│
├─ Rezar Interativamente
│  ├─ Próximo
│  ├─ Voltar
│  └─ Parar
│
└─ Ir para Terço Lido
   ├─ Selecionar Mistério
   ├─ Ler em Voz Alta
   └─ Copiar Texto
```

### Como Configurar (Desenvolvimento)

1. **Clonar o repositório**

```bash
git clone <repo-url>
cd terco
```

2. **Instalar em servidor local**
   - Coloque em pasta acessível pelo servidor Apache/PHP
   - Certifique-se de que o PHP está instalado (v7.0+)

3. **Configurar permissões** (se necessário)

```bash
chmod 755 -R terco/
```

4. **Verificar .htaccess**
   - O arquivo `.htaccess` está configurado para o servidor
   - Se usar outro servidor, pode ser necessário ajustar

5. **Acessar a aplicação**
   - http://localhost/terco/ (ou domínio configurado)

### Variáveis Importantes

**Em `controller/info.php`:**

```php
$head_title          // Título da aplicação
$head_description    // Descrição para SEO
$head_link           // URL canônica
$head_autor          // Informações do autor
$head_imagem         // Imagem para OpenGraph
```

### Estrutura de Dados

**Mistérios** (em `model/arrays.php`):

```php
$misterios_gozosos = [...]      // 5 mistérios
$misterios_dolorosos = [...]    // 5 mistérios
$misterios_gloriosos = [...]    // 5 mistérios
$misterios_luminosos = [...]    // 5 mistérios
```

**Orações**:

```php
$sinal_da_cruz      // Sinal da cruz
$creio              // Profissão de fé
$pai_nosso          // Pai Nosso
$ave_maria          // Ave Maria
$gloria_ao_pai      // Glória ao Pai
$o_meu_jesus        // Ó meu Jesus
$salve_rainha       // Salve Rainha
```

### APIs Utilizadas

#### Web Speech API

```javascript
const synth = window.speechSynthesis;
const utter = new SpeechSynthesisUtterance(texto);
synth.speak(utter);
```

### Customização

#### Mudar Cores

Edite `:root` em `view/terco-lido.php`:

```css
--gozosos-bg: #0a1f3b;
--luminosos-bg: #0f2b1a;
--dolorosos-bg: #3a0f1f;
--gloriosos-bg: #3a2810;
```

#### Ajustar Tamanhos de Fonte

Em `:root`:

```css
--fontSizeTitulo: 3vw;
--fontSizeTexto: 1.3vw;
--fontSizeBtn: 1.3vw;
```

#### Adicionar Novas Páginas

1. Criar arquivo em `routes/`
2. Adicionar condicional em `index.php`
3. Criar template em `view/`

### Performance

- Arquivos CSS minificados por tipo de dispositivo
- JavaScript não-bloqueante (carregado no final)
- Imagens otimizadas em formato WebP
- Fontes carregadas localmente (sem request externo)

### Compatibilidade

- ✅ Chrome/Edge 80+
- ✅ Firefox 75+
- ✅ Safari 13+
- ✅ Smartphones modernos
- ⚠️ IE11 (com limitações)

### Contribuindo

1. Criar branch para sua feature: `git checkout -b feature/nova-funcionalidade`
2. Commit suas mudanças: `git commit -m 'Adiciona nova funcionalidade'`
3. Push para o branch: `git push origin feature/nova-funcionalidade`
4. Abrir um Pull Request

### Licença

Projeto livre para uso pessoal e comercial.

### Contato

**Autor**: Caio Loureiro  
**Telefone**: 47 9 8804-6845  
**Site**: https://digitalmd.com.br/caioloureiro/terco

---

**Desenvolvido com ❤️ para fortalecer a fé e a devoção**
