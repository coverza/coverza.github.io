
// Создание элементов
const whatsappButton = document.createElement('a');
const whatsappIcon = document.createElement('div');
const whatsappIconI = document.createElement('i');
const circleAnimation1 = document.createElement('div');
const circleAnimation2 = document.createElement('div');
const circleAnimation3 = document.createElement('div');

// Установка атрибутов и стилей
whatsappButton.setAttribute('href', 'https://api.whatsapp.com/send/?phone=79533538103');
whatsappButton.setAttribute('id', 'whatsapp-button');
whatsappButton.setAttribute('target', '_blank');
whatsappButton.style.cssText = 'display: flex; justify-content: center; align-items: center; position: fixed; bottom: 20px; right: 20px; z-index: 9999; width: 60px; height: 60px; border-radius: 50%; background-color: #c0392b; text-decoration: none; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25); transition: all 0.3s ease;';

whatsappIcon.className = 'whatsapp-icon';
whatsappIcon.style.cssText = 'display: flex; justify-content: center; align-items: center;';

whatsappIconI.className = 'fab fa-whatsapp';
whatsappIconI.style.cssText = 'font-size: 24px; color: white;';

circleAnimation1.className = 'circle-animation';
circleAnimation2.className = 'circle-animation';
circleAnimation3.className = 'circle-animation';

const circleAnimationStyle = 'position: fixed; bottom: 20px; right: 20px; width: 60px; height: 60px; border-radius: 50%; background-color: rgba(192, 57, 43, 0.2); animation: scale-out 2s infinite; z-index: 9998; pointer-events: none;';
circleAnimation1.style.cssText = circleAnimationStyle;
circleAnimation2.style.cssText = `${circleAnimationStyle} animation-delay: 1s;`;
circleAnimation3.style.cssText = `${circleAnimationStyle} animation-delay: 2s;`;

// Создание и добавление стилей анимации
const animationStyles = document.createElement('style');
animationStyles.textContent = `
  @keyframes scale-out {
    0% {
      transform: scale(1);
      opacity: 1;
    }
    100% {
      transform: scale(2.5);
      opacity: 0;
    }
  }
`;
document.head.appendChild(animationStyles);

// Вставка элементов
whatsappIcon.appendChild(whatsappIconI);
whatsappButton.appendChild(whatsappIcon);
document.body.appendChild(whatsappButton);
document.body.appendChild(circleAnimation1);
document.body.appendChild(circleAnimation2);
document.body.appendChild(circleAnimation3);

// Обработчик событий для анимации
whatsappButton.addEventListener('mouseover', () => {
  whatsappButton.style.transform = 'scale(1.1)';
});

whatsappButton.addEventListener('mouseout', () => {
  whatsappButton.style.transform = whatsappButton.style.transform = 'scale(1)';
});

// Вставка элементов
whatsappIcon.appendChild(whatsappIconI);
whatsappButton.appendChild(whatsappIcon);
document.body.appendChild(whatsappButton);
document.body.appendChild(circleAnimation1);
document.body.appendChild(circleAnimation2);
document.body.appendChild(circleAnimation3);
