#importaremos a biblioteca nativa de expressões regulares e nossa classe que criamos.
import re
from bot import wppbot
#Setamos nosso bot passando o nome do mesmo.
bot = wppbot('robozin')
#Treinamos o nosso bot informando a pasta que está a nossas legendas.
bot.treina('treino')
#Iniciamos o bot informando o grupo/pessoa que vamos conversar.
bot.inicia('DATA SCIENCE BRAZIL 2')
#Setamos nossa saudação a entrar no grupo com duas frases em uma lista.
bot.saudacao(['Bot: Oi sou um bot e entrei no grupo!','Bot: Use :: no início para falar comigo!'])
#Setamos a váriável último texto sem nada.
ultimo_texto = ''

#Sempre será true então nunca irá para nosso script.
while True:
#Usamos o método de escuta que irá setar na variável texto.
    texto = bot.escuta()
#Agora validamos se o texto enviado no grupo/pessoa é o mesmo que o último já lido.
#Essa validação serve para que o bot não fique respondendo o mesmo texto sempre.
#Validamos também se no texto possuí o comando :: no início para que ele responda.
    if texto != ultimo_texto and re.match(r'^::', texto):
#Passando na validação setamos o texto como último texto.
        ultimo_texto = texto
#Retiramos nosso comando de ativar do bot da string.
        texto = texto.replace('::', '')
#Tratamos para deixar o texto em caracteres minúsculos.
        texto = texto.lower()
#Enviamos para o método responde que irá responder no grupo/pessoa.
        bot.responde(texto)

