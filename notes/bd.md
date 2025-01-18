## Banco de dados

  # Entidades & Atributos:
   # # # ADM: adm_id, adm_userName, adm_name, adm_lastName, adm_password;
   # # # BIBLIOTECA: biblio_cod, biblio_name, biblio_date, biblio_adress, biblio_state;
   # # # LIVROn: Livro_Cod, Livro_Titulo, Livro_Autor, Livro_Capa, Livro_Exemplar, Livro_QtdDisponivel, Livro_QtdPaginas, Livro_Tombo, Livro_Classificacao, Livro_Nota, Livro_Vestibular, Livro_Area, Livro_Sinopse
   # # # FUNCIONARIOn: func_cod, func_name, func_password, biblio_cod;
   # # # ALUNOn: aluno_rm, aluno_name, aluno_password, aluno_livro1, aluno_livro2, aluno_livro3, aluno_pendencias, aluno_anotacao, biblio_cod;
   # # # PEDIDO_EMPRESTIMOn: pedido_emp_id, pedido_emp_livro1, pedido_emp_livro2, pedido_emp_livro3, pedido_emp_data, pedido_emp_visto, aluno_rm,biblio_cod;
   # # # PEDIDO_DEVOLUCAOn: pedido_dev_id, pedido_dev_livro1, pedido_dev_livro2, pedido_dev_livro3, pedido_dev_data, pedido_dev_visto, aluno_rm,biblio_cod;
   # # # EMPRESTIMOn:
   # # # MOCHILAn: mochila_id, mochila_livro1, mochila_livro2, mochila_livro3, mochila_livre, aluno_rm, biblio_cod;

  # > Lógicas do banco de dados:
    > > O atributo mochila_livre terá valores binários (0,1)[0 = não livre & 1 = livre], se estiver livre o aluno pode adicionar livros;
    > > Os atributos pedido_emp_visto e pedido_dev_visto teram valores binários (0,1)[0 = não visto & 1 = visto], se o aluno possuir algum empréstimo com _visto = 0 e os atributos: aluno_livro1,aluno_livro2,aluno_livro3 estiverem vazios ele não poderá criar um novo pedido e deve esperar até que o pedido anterior seja aprovado ou negado;
    > > Os atributos pedido_emp_data e pedido_dev_data armazeranam as datas do pedidos, se passado X dias desde a data de criação e o atributo _visto = 0 o pedido será excluído e o usuário poderá criar um novo;
    > > Nos pedidos de devoluãção o usuário poderá livro a livro ou mais de um livro, porém deve ter devolvido todos os livros dentro do prazo do empréstimo (data_emprestimo + 14 dias), ou seja, o aluno não poderá pegar novos livros até ter devolvido todos


  # Ent & Atr (Português):
    Adm: Id, UserName, Name, LastName, Email, Password;
    Biblioteca: Id, Name, InitDate, Address, State, QtdLivroPossiveis, DataLimite, TurmaLeitora;
    Livro: Cod, Titulo, Autor, Capa, Qtd, Paginas, Tombo (para que entraram em desuso), Classificacao, Avaliacao, Tipo, Genero, Sinopse, Id-biblioteca
    Funcionario: Id, Name, LastName, Password, Email, NivelHieraquia, Id-biblioteca
    Aluno: Id(rm&ra), Name, LastName, Turma, Mochila[QtdLivroPossiveis], Pendencia, Anotacao, QtdEmprestimo, QtdLivrosPegos, Historico, Nivel, Frequencia, Id-biblioteca
    Pedido_Emprestimo: Id, Aluno, Pedido[QtdLivroPossiveis], Data, Visto, Cancelado, Obs, Id-biblioteca
    Pedido_Devolucao: Id, Aluno, Pedido[Mochila], Data, Visto, Cancelado, Obs, Id-biblioteca
    Pedido_Extensao: Id, Aluno, Pedido[Mochila], Data, Visto, Cancelado, Obs, Id-biblioteca
    Emprestimo: Id, Aluno, Livros[Pedido], DataInicio, DataLimite, DataEntrega, Extensao, Id-biblioteca
    Pendencia: Id, Aluno, Tipo, Data, Resolvida, Id-biblioteca
    Mochila (Carrinhno): Id, Mochila[Pedido], Aluno, Id-biblioteca



cod,titulo,autor,capa,qtd,

