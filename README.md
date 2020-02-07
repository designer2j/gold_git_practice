# 깃 연습
우리 다 같이 깃 연습을 합시다.

## 개요
간단한 yaml 파서 작성을 통해 git 운용 방법을 알아본다.

## 사전 준비사항
  - Git
  - [Github](https://github.com/) 
    - 공동 작업 시 Github ID 필요함... 없으면 가입 ㄱㄱ  
  - php (7.2 이상)
    - [Composer](https://getcomposer.org/) 
    - [Composer 사용 방법 정리](https://www.lesstif.com/pages/viewpage.action?pageId=23757293)
      - 패키지 설치 방법 정도만 확인하면 됨.
  - [YAML이란 무엇인가?](https://ko.wikipedia.org/wiki/YAML)
  - 웹서버
    - 웹서버가 없다면 src 디렉토리에서 [빌트인 웹서버](https://www.php.net/manual/en/features.commandline.webserver.php)를 띄우시면 됩니다.
      - ex) php -S 0.0.0.0:12343

## 목표
config.yaml 파일의 내용을 확인할 수 있어야 한다.

#### 상세 설명
  - 우선 디렉토리 구조는 다음과 같다.  
    ```
    mint_git_practice
    └─src
        ├─bskim // 김봉수 작업 폴더
        └─lib   // 공용 라이브러리 폴더
    ```  
  - src 디렉토리 밑에 config.yaml 파일을 배치하였다.
  - 웹 브라우저에서 이 config.yaml의 내용을 볼 수 있는 프로그램을 작성해야 함.
  - src 디렉토리 밑에 자기 이름의 이니셜 디렉토리를 만들고 해당 디렉토리에 접근하면 config.yaml 의 내용이 보여야 함.
    - index.php는 주소창에서 생략 가능함.... 아시죠?????
    - git 연습이므로 출력은 임의대로 구현해도 상관없음.
  - 구현되었다면 commit 하고 push 하여 소스 내용을 저장소에 반영하면 됨.

참고로 김봉수는 bskim 디렉토리에 이미 구현해 놓았으므로 뭔 말인지 모르겠으면 확인해보도록 하자.

## 할 일
  - Git clone 을 통해서 소스코드를 복제한다.
    - [저장소 위치](https://github.com/mozartk/mint_git_practice)
  - 소스코드 디렉토리 안에서  
    ```sh
    composer install
    ```  
    명령어를 입력하여 관련 패키지 설치  
  - src 디렉토리로 이동하여 웹서버를 띄운다.
    - 빌트인 웹서버를 띄우는 명령어를 입력하면 웹서버가 기동된다.  
      ```sh
      cd src/
      php -S 0.0.0.0:12343
      ```  
    - 웹 브라우저에 주소창에 localhost:12343 을 입력하면 "각자의 이니셜 디렉토리로 접근하시면 됩니다." 메세지가 출력되어야 함
    - 웹 브라우저에 주소창에 localhost:12343/bskim 을 입력하면 배열 데이터들이 출력되어야 함   
  - src 디렉토리 밑에 각자 이름 이니셜의 디렉토리를 생성하고 index.php를 생성한다.
    - index.php는 생략
    - index.php 를 만들어서 url에 해당 디렉토리로 접근하면 바로 웹서버에서 보이도록 작업해야 함
  - index.php 에 각자의 방법으로 config.yaml 파일을 읽어서 출력하는 기능을 구현한다.
    - 필요하다면 lib 디렉토리에 각자의 라이브러리를 작성해도 됨 
  - 최종적으로 yaml 내용이 잘 뜨는지 확인한다.
  - 변경된 내용을 커밋하고 push 한다.

## 검증
  - github 서버에서 개발 서버에 pull 받는다.
  - 빌트인 웹서버를 src 디렉토리 이하에서 실행하였을 때, 각자의 이니셜에서 각자의 방법으로 내용이 표시되면 완료.
  
